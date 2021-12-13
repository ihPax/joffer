<template>
  <div class="h-screen text-black">
    <h1 class="text-2xl font-bold mt-10">
      Richiesta figura specializzata in
      <span class="text-red-600">{{ offerta.linguaggio }}</span>
    </h1>
    <div class="flex-col flex justify-center items-center mx-20 my-5">
      <div class="flex-col flex">
        <div class="flex-row flex">
         Nome azienda {{ offerta.nomeazienda }}
        </div>
        <div class="flex-row flex">
          Cerchiamo la figura di {{ offerta.experience }}
        </div>
        <div class="flex-row flex">
          Location dell'offerta in:
        {{ offerta.location }}
        </div>
        <div class="flex-row flex">
          {{ offerta.description }}
        </div>
        <div class="flex-row flex">
          Stipendio annuale lordo $<span class="text-green-600">{{
            offerta.ral
          }}</span>
        </div>
        <div class="container flex justify-center mt-10">
          <img
            :src="offerta.icon_linguaggio"
            alt="offerta"
            class="flex w-36 h-36"
          />
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "Dettaglio",
  data() {
    return {
      offerta: [],
    };
  },
  async mounted() {
    let response = await this.$axios.get(
      "http://127.0.0.1:8000/api/view/" + this.$route.params.id
    );
    this.offerta = response.data;
    console.log("Sei entrato nella sezione dettaglio")
  },
  methods: {},
};
</script>