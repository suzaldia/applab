<template>
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h2> <i class="fa fa-envelope"></i> Contact</h2>
      </div>
      <div class="card-body">
        <form @submit.prevent="onSubmit" class="contact">
         <div class="row justify-content-center">
           <div class="col-6">
            <ContactForm label="Name" v-model="$v.form.name.$model" :validator="$v.form.name"></ContactForm>
           </div>
           <div class="col-6">
            <ContactForm label="Surname" v-model="$v.form.surname.$model" :validator="$v.form.surname"></ContactForm>
            </div>
         </div>

         <div class="row">
           <div class="col-6">
          <ContactForm
            label="Email"
            type="email"
            v-model="$v.form.email.$model"
            :validator="$v.form.email"
          ></ContactForm>
          </div>

          <div class="col-6">
          <ContactForm
            label="Phone"
            :mask="'### ### ###'"
            v-model="$v.form.phone.$model"
            :validator="$v.form.phone"
          ></ContactForm>
          </div>

          </div>

          <div class="form-group">
            <label>Message</label>
            <textarea
              v-model="$v.form.content.$model"
              class="form-control"
              :class="{
                'is-valid':!$v.form.content.$error && $v.form.content.$dirty,
                'is-invalid':$v.form.content.$error,
            }"
              rows="3"
            ></textarea>
          </div>
          <button :disabled="!formValid" type="submit" class="btn btn-primary"> <i class="fa fa-envelope"></i> Submit</button>

          <button class="btn btn-danger ml-3" @click="resetForm"><i class="fa fa-redo"></i> Reset</button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import ContactForm from "../components/ContactForm.vue";
import { required, minLength, email } from "vuelidate/lib/validators";

export default {
  components: { ContactForm },
  data() {
    return {
      form: {
        name: "",
        surname: "",
        email: "",
        phone: "",
        content: ""
      }
    };
  },
  validations: {
    form: {
      name: {
        required,
        minLength: minLength(3)
      },
      surname: {
        required,
        minLength: minLength(3)
      },
      email: {
        required,
        email
      },
      phone: {
        required,
        minLength: minLength(11)
      },
      content: {
        required
      }
    }
  },
  methods: {
    resetForm() {
      this.$v.form.name.$model = "";
      this.$v.form.surname.$model = "";
      this.$v.form.email.$model = "";
      this.$v.form.phone.$model = "";
      this.$v.form.content.$model = "";

      this.$v.$reset();

      document
        .querySelectorAll("form.contact input, form.contact textarea")
        .forEach(e => (e.value = ""));
      this.$awn.info("Form restarted");
    },
    onSubmit() {
      if (!this.formValid) return;

      axios
        .post("/api/contact", {
          name: this.$v.form.name.$model,
          surname: this.$v.form.surname.$model,
          email: this.$v.form.email.$model,
          message: this.$v.form.content.$model,
          phone: this.$v.form.phone.$model
        })
        .then(function(response) {
          console.log(response.data);
          this.$awn.success("Contact form sent successfully");
        });
    }
  },
  computed: {
    formValid() {
      return !this.$v.$invalid;
    }
  }
};
</script>
<style lang="scss">
@import "~vue-awesome-notifications/dist/styles/style.scss";
</style>