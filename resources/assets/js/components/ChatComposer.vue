<template lang="html">
  <div class="chat-composer">
      <input id="message" type="text" placeholder="Start typing your message..." v-model="messageText" @keyup.enter="sendMessage">
      <button class="btn btn-primary" @click="sendMessage">Send</button>
  </div>
</template>

<script>
export default {
    data() {
        return {
            messageText: ''
        }
    },
    methods: {
        sendMessage() {
            this.$emit('messagesent', {
                message: this.messageText,
                user: {
                    name: $('.navbar-right .dropdown-toggle').text()
                }
            });
            this.messageText = '';
        }
    }
}
</script>

<style lang="css">
.chat-composer {
    display: flex;
}

.chat-composer input {
    flex: 1 auto;
    padding: .5rem 1rem;
}

.chat-composer button {
    border-radius: 0;
}
</style>
