function check(){
    let clk= document.getElementById("userid");
    if(clk.value == null)
    {
        alert("enter email or phone");
        return false;
    }
    return true;
}