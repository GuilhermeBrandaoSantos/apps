"use strict";

new Vue({
  el: '#converter',
  data: {
    resultado: 0,
    binario: ''
  },
  methods: {
    converter: function converter() {
      var conversao = parseInt(this.binario, 2);
      this.resultado = conversao;
    },
    validaCampo: function validaCampo() {
      var binNumber = this.binario;
      var regra = new RegExp('^[0-1]+$');
      var validaRegra = regra.test(binNumber);

      if (!validaRegra) {
        swal({
          title: "Ooops",
          text: "Por favor, digite um número binário",
          icon: 'error',
          button: {
            text: 'Ok',
            className: 'btn-alert error'
          }
        });
        this.resultado = 0;
      }

      if (binNumber.length > 8) {
        swal({
          title: "Atenção",
          text: "Por favor, digite até 8 números",
          icon: 'warning',
          button: {
            text: 'Ok',
            className: 'btn-alert warning'
          }
        });
        this.resultado = 0;
      }
    }
  }
});