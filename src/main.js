import Vue from 'vue'
import App from './App.vue'
import router from './router'
import axios from 'axios'
//import store from './store'

new Vue({
  router,
  //store,
  render: h => h(App)
}).$mount('#app')

// IDEA TO SAVE OUR ASSES

//  const url = './index.php?fname=Guilherme&lname=Bueno&email=guilhermebueno6%40gmail.com&country=CA';
//  fetch(url)
//  .then(res => res.json())
//  .then(data => {
//     console.log(data);

    
//  })
//  .catch((err) => console.log(err))