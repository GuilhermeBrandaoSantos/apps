var range1 = document.getElementById('customRange1');
    valor = document.getElementById('valorRange1');     

range1.addEventListener('input',function () {
    valor.textContent = this.value;
})
