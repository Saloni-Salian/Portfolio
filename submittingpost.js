function clearBlog() 
{
    if (window.confirm("Do you actually want to clear your post?")) 
    {
        window.addEventListener("click", document.getElementById("addblog").reset(), "Your blog post has been cleared.");
    }
    else
    {}
}


function load(){
    var form = document.getElementById("addblog");
    form.addEventListener("submit", function(e)
    {   
        var body = document.getElementById("post").value;
        var title = document.getElementById("title").value;
        if (body == '') 
        {
            e.preventDefault();
            document.getElementById("post").style.backgroundColor = "#FDFF47";
        }
        else 
        {document.getElementById("post").style.backgroundColor = "white";}
        if (title == '') 
        {
            e.preventDefault();
            document.getElementById("title").style.backgroundColor = "#FDFF47";
        }
        else 
        {document.getElementById("title").style.backgroundColor = "white";}
    });
}
load()
    
