function FormuKontrolEt(form)
{
    var name = form.name.value;
    var surname = form.name.value;
    var email = form.mail.value;
    var hobiler = form.elements["hobiler[]"];
    var secildiMi = false;
    var okul = form.okul.value;
    var egitim = form.egitim.value;
    if(egitim == "")
    {
        alert("Egitim seviyenizi seçiniz");
        return false;
    }
    if(okul == "")
    {
        alert("Okul seçiniz!");
        return false;
    }
    for(var i=0;i<hobiler.length;i++)
    {
    if(hobiler[i].checked)
    {
        secildiMi = true;
    }
    }
    if(!secildiMi)
    {
        alert("En az bir hobi seçiniz.");
        return false;
    }
    // var x = form.hobi.value;
    if (name == "" || surname == "") {
        alert("İsim-Soyad alanı boş bıraklımamalıdır");
        return false;
    }
    if (email.indexOf('@') === -1) {
        alert("epostada '@' bulunmalıdır!");
        return false;
    }
    const parts = email.split('@');
    if (parts.length !== 2||parts[0].length < 1 || parts[1].length < 1||parts[1].indexOf('.') === -1) {
        alert("epostanın formatı yanlış!");
        return false;
    }
}