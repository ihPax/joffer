<template>
  <div class="flex flex-grow h-full w-full">
    <div class="flex grid grid-cols-5 w-full h-full mx-auto mt-10 my-6 gap-3">
      <div v-for="(offerta, index) in offertas" :key="index">
        <h3 class="text-black font-bold text-lg">{{ offerta.linguaggio }}</h3>

        <div class="container flex justify-center">
          <img
            :src="offerta.icon_linguaggio"
            alt="offerta"
            class="w-56 h-56"
          />
        </div>
        <div class="flex items-center justify-center flex-grow">
          <button
            class="bg-transparent hover:bg-blue-500 text-blue-700 my-6 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"
            @click="Dettaglio(offerta)"
          >
            Dettaglio
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Start",
  data() {
    return {
      offertas: [],
    };
  },
  async mounted() {
    let response = await this.$axios.get("http://127.0.0.1:8000/api/list");
    this.offertas = response.data;
    console.log("E' ARRIVATA LA LISTA FICA")
  },
  methods: {
    Dettaglio(offerta) {
      this.$router.push("dettaglio/" + offerta.id);
    },
  },
};
</script>

<style>
.container {
  position: relative;
}

.image {
  display: block;
  transition: 0.5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: 0.5s ease;
  opacity: 0;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  width: 90%;
  height: 90%;
  margin: auto;
  /*transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);*/
}

</style>
