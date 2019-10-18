require('./bootstrap');
Vue.component('chatbox', require('./components/ChatBoxComponent.vue').default); 
Echo.private('chat')
  .listen('MessageSent', (e) => {
    this.messages.push({
      message: e.message.message,
      user: e.user
    });
  });