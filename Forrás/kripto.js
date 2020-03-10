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

function alapertelmezett(id) {
    document.getElementById('ch' + id).checked = true;
}

function atvaltas() {
    
}