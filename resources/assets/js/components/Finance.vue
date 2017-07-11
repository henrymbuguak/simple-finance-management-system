<template>
   <h4>Submitted forms by Investor</h4>
   <ul class="list-group">
      <li class="list-group-item" v-for="finance in list"></li>
      {{finance}}
   </ul>

</template>

<script>
    export default{
       data: function () {
          return {
             list:[],
             finance: {
               id: '',
               first_name: '',
               last_name: '',
               phone_number: '',
               id_number: '',
             }
          };
       },
       ready: function() {
           this.fetchFinanceList();
       },

       methods: {
          fetchFinanceList: function() {
              this.$http.get('api/investor').then(function (response) {
                 this.list = response.data
              });
          },
       }
    }
</script>