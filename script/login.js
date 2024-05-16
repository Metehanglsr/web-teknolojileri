function loginKontrol(form)
{
    var name = form.name.value;
    var password = form.password.value;
    if(name == "")
    {
        alert("Kullanıcı adı alanı boş geçilemez!");
        return false;
    }
    if(password == "")
    {
        alert("Şifre giriniz!");
        return false;
    }
}