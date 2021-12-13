<template>
  <div class="h-screen text-black">
    <h1 class="text-2xl font-bold mt-10">Aggiungi un Offerta sul mercato</h1>
    <div class="flex-col flex justify-center items-center mx-20 my-5">
      <input
        type="text"
        v-model="newOfferta.linguaggio"
        placeholder="Aggiungi nome del linguaggio"
        class="
          bg-gray-200
          appearance-none
          border-2 border-gray-200
          rounded
          w-full
          py-2
          px-4
          my-5
          text-gray-700
          leading-tight
          focus:outline-none focus:bg-white focus:border-purple-500
        "
      />

      <input
        type="text"
        v-model="newOfferta.nomeazienda"
        placeholder="Aggiungi nome azienda"
        class="
          bg-gray-200
          appearance-none
          border-2 border-gray-200
          rounded
          w-full
          py-2
          my-5
          px-4
          text-gray-700
          leading-tight
          focus:outline-none focus:bg-white focus:border-purple-500
        "
      />

      <input
        type="text"
        v-model="newOfferta.icon_linguaggio"
        placeholder="Aggiungi l'immagine del linguaggio"
        class="
          bg-gray-200
          appearance-none
          border-2 border-gray-200
          rounded
          my-5
          w-full
          py-2
          px-4
          text-gray-700
          leading-tight
          focus:outline-none focus:bg-white focus:border-purple-500
        "
      />

      <input
        type="float"
        v-model="newOfferta.ral"
        placeholder="Aggiungi stipendio annuale lordo"
        class="
          bg-gray-200
          appearance-none
          border-2 border-gray-200
          rounded
          w-full
          py-2
          px-4
          my-5
          text-gray-700
          leading-tight
          focus:outline-none focus:bg-white focus:border-purple-500
        "
      />

      <input
        type="text"
        v-model="newOfferta.experience"
        placeholder="Aggiungi l'esperienza che cerchi"
        class="
          bg-gray-200
          appearance-none
          border-2 border-gray-200
          rounded
          w-full
          py-2
          px-4
          text-gray-700
          my-5
          leading-tight
          focus:outline-none focus:bg-white focus:border-purple-500
        "
      />
      <input
        type="text"
        v-model="newOfferta.location"
        placeholder="Aggiungi il luogo"
        class="
          bg-gray-200
          appearance-none
          border-2 border-gray-200
          rounded
          w-full
          py-2
          px-4
          text-gray-700
          my-5
          leading-tight
          focus:outline-none focus:bg-white focus:border-purple-500
        "
      />
      <input
        type="text"
        v-model="newOfferta.description"
        placeholder="Aggiungi una descrizione"
        class="
          bg-gray-200
          appearance-none
          border-2 border-gray-200
          rounded
          w-full
          py-2
          px-4
          text-gray-700
          my-5
          leading-tight
          focus:outline-none focus:bg-white focus:border-purple-500
        "
      />

      <button
        class="
          bg-transparent
          hover:bg-blue-500
          text-blue-700
          my-6
          font-semibold
          hover:text-white
          my-5
          py-2
          px-4
          border border-blue-500
          hover:border-transparent
          rounded
        "
        @click="conferma()"
      >
        Aggiungi offerta
      </button>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "Aggiungi",
  data() {
    return {
      newOfferta: {},
    };
  },
  methods: {
    async conferma() {
      console.log(this.newOfferta);
      let response = await axios.post(
        "http://127.0.0.1:8000/api/AddOfferta",
        this.newOfferta
      );
      console.log(response);
    },
  },
};
</script>