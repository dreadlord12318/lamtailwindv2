<template>
  <div class = "home">
    <Modal :modalActive = "modalActive">
      <div class = "modal-content">
        <h1>WHAT AM I</h1>
      </div> 
    </Modal>
    <button @click="toggleModal" type = "button">Open Modal</button>
  </div>
  
</template>

<script>
import Modal from '../components/Modal.vue'
import { ref } from 'vue'

export default {

  name: "Home",
  components: {
    Modal,
  },
  setup(){
    const modalActive = ref(false);

    const toggleModal = () => {
      modalActive.value = !modalActive.value;
    }

    return {modalActive,
    toggleModal,}
  }
};
</script>