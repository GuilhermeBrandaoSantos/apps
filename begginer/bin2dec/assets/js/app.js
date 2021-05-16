new Vue({
    el: '#converter',
    data: {
        resultado: '',
        binario: '',
    },
    methods: {
        converter() {
            const conversao = parseInt(this.binario, 2)
            this.resultado = conversao
        },
        validaCampo() {
            const binNumber = this.binario;
            const regra = new RegExp('^[0-1]+$');
            const validaRegra = regra.test(binNumber);

            if (!validaRegra) {
                swal({
                    title: "Ooops",
                    text: "Por favor, digite um número binário",
                    icon: 'error',
                    button:{
                        text: 'Ok',
                        className: 'btn-alert error'
                    }
                });                
                this.resultado = 0
            }
            if (binNumber.length > 8) {
                swal({
                    title: "Atenção",
                    text: "Por favor, digite até 8 números",
                    icon: 'warning',
                    button:{
                        text: 'Ok',
                        className: 'btn-alert warning'
                    }
                });               
                this.resultado = 0
            }
        }
    }
})

