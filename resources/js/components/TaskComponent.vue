<template>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-3 mt-5">
        <form @submit.prevent>
          <div class="form-group">
            <label for="name">Task Name</label>
            <input type="text" id="name" class="form-control" v-model="newEvent.name">
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="start_date">Start Date</label>
                <input type="date" id="start_date" class="form-control" v-model="newEvent.start_date"
                >
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="end_date">End Date</label>
                <input type="date" id="end_date" class="form-control" v-model="newEvent.end_date">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="color">Color</label>
                <input type="color" id="color" class="form-control" v-model="newEvent.color">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="5" class="form-control" v-model="newEvent.description"></textarea>
              </div>
            </div>
            <div class="col-md-6 mb-4" v-if="addingMode">
              <button class="btn btn-sm btn-primary" @click="addNewEvent">Save Event</button>
            </div>
            <template v-else>
              <div class="col-md-8 mb-4">
                <button class="btn btn-sm btn-success" @click="updateEvent">Update</button>
                <button class="btn btn-sm btn-danger" @click="deleteEvent">Delete</button>
                <button class="btn btn-sm btn-secondary" @click="addingMode = !addingMode">Cancel</button>
              </div>
            </template>
          </div>
        </form>
      </div>
      <div class="col-md-9">
        <Fullcalendar 
        @eventClick="showEvent"

        :header="{
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'}" 
        :plugins="calendarPlugins" 
        :events="events" 
        :height="700" 
        :editable="true"
        />
      </div>
    </div>
  </div>
</template>

<script>
import Fullcalendar from "@fullcalendar/vue";
import dayGridPlugin from "@fullcalendar/daygrid";
import timeGridPlugin from "@fullcalendar/timegrid";
import interactionPlugin from "@fullcalendar/interaction";
import axios from "axios";

export default {
  components: {
    Fullcalendar
  },
  data() {
    return {
      calendarPlugins: [dayGridPlugin, interactionPlugin, timeGridPlugin],
       events: "",
      newEvent: {
        name: "",
        start_date: "",
        end_date: "",
        color: "#3788d8",
        description: ""
      },
      addingMode: true,
      indexToUpdate: ""
    };
  },
  created() {
    this.getEvents();
  },
  methods: {
    addNewEvent() {
      axios
        .post("/api/tasks", {
          ...this.newEvent
        })
        .then(data => {
          this.getEvents(); // update our list of tasks
          this.resetForm(); // clear task management form 
        })
        .catch(err =>
          console.log("Unable to add new task!", err.response.data)
        );
    },
    showEvent(arg) {
      this.addingMode = false;
      const { id, title, start, end, color, description } = this.events.find(
        event => event.id === +arg.event.id
      );
      this.indexToUpdate = id;
      this.newEvent = {
        name: title,
        start_date: start,
        end_date: end,
        color: color,
        description: description
      };
    },
    updateEvent() {
      axios
        .put("/api/tasks/" + this.indexToUpdate, {
          ...this.newEvent
        })
        .then(resp => {
          this.resetForm();
          this.getEvents();
          this.addingMode = !this.addingMode;
        })
        .catch(err =>
          console.log("Unable to update task!", err.response.data)
        );
    },
    deleteEvent() {
      axios
        .delete("/api/tasks/" + this.indexToUpdate)
        .then(resp => {
          this.resetForm();
          this.getEvents();
          this.addingMode = !this.addingMode;
        })
        .catch(err =>
          console.log("Unable to delete task!", err.response.data)
        );
    },
    getEvents() {
      axios
        .get("/api/tasks")
        .then(resp => (this.events = resp.data.data))
        .catch(err => console.log(err.response.data));
    },
    resetForm() {
      Object.keys(this.newEvent).forEach(key => {
        return (this.newEvent[key] = "");
      });
    }
  },
  watch: {
    indexToUpdate() {
      return this.indexToUpdate;
    }
  }
};
</script>

<style lang="css">
@import "~@fullcalendar/core/main.css";
@import "~@fullcalendar/daygrid/main.css";
@import '~@fullcalendar/timegrid/main.css';

.fc-title {
  color: #fff;
}

.fc-title:hover {
  cursor: pointer;
}

</style>

