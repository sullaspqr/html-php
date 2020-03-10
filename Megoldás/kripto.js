$( "a" ).click(function() {
    if (this.innerText == "Bitcoin") {
        $("#accordiontop5 .collapse").removeClass("show");
        $("#bitcoinContent").addClass("show");
    } else 
    if (this.innerText == "Ethereum") {
        $("#accordiontop5 .collapse").removeClass("show");
        $("#ethereumContent").addClass("show");
    } else 
    if (this.innerText == "Litecoin") {
        $("#accordiontop5 .collapse").removeClass("show");
        $("#litecoinContent").addClass("show");
    } else 
    if (this.innerText == "Ripple") {
        $("#accordiontop5 .collapse").removeClass("show");
        $("#rippleContent").addClass("show");
    } else 
    if (this.innerText == "Monero") {
        $("#accordiontop5 .collapse").removeClass("show");
        $("#moneroContent").addClass("show");
    }
  });


function atvaltas() {
    var euro = Number(document.getElementById('euro').value);
    if (euro) {
        if (document.getElementById('chbitcoin').checked) {
            document.getElementById('eredmeny').value = Math.round(10000 * euro / 8056.50) / 10000 + ' BTC';
        } else 
        if (document.getElementById('chethereum').checked) {
            document.getElementById('eredmeny').value = Math.round(10000 * euro / 204.5) / 10000 + ' ETH';
        } else 
        if (document.getElementById('chmonero').checked) {
            document.getElementById('eredmeny').value = Math.round(10000 * euro / 64.35) / 10000 + ' XMR';
        }
    }
    else {
        document.getElementById('eredmeny').value = 'H I B A';
    }
}