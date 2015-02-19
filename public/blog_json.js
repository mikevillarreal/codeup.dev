var blog = [
    {
        "title": "La Muerte del Chupacabras",
        "date": "2015-10-30",
        "author": "Isaac Castillo",
        "image": "http://www.someimagehere.com/image.jpg",
        "tags": [
            "web",
            "design",
            "html"
        ],
        "category": "development",
        "post": "lorem ipsum dolor and stuff here"
    },
    {
        "title": "El Chupacabras is alive",
        "date": "2015-10-30",
        "author": "Isaac Castillo",
        "tags": [
            "web design",
            "design graphic",
            "html web"
        ],
        "category": "development",
        "post": "lorem ipsum dolor and stuff here"
    }
]

// var blogTitle = document.getElementById("blog-title");
// var date = document.getElementById("date");
// blogTitle.innerHTML = blog[0].title;
// date.innerHTML = blog[0].date;


// blog.forEach(function(element, index, array){

// })
var pageHeader = document.getElementById("header");
console.log(pageHeader);

pageHeader.innerHTML = "My First Blog, Bro!!"

var blogPost = document.getElementById("post");
console.log(blogPost)

var blogStructure = " ";

for (var i = 0; i < blog.length ; i++) {
    blogStructure += '<h2>' + blog[i].title + '</h2>'; 
    blogStructure += '<h4>By ' + blog[i].author + '</h4>';    
    blogStructure += '<p>Created on ' + blog[i].date; + '</p>'; 
    blogStructure += '<p>' + blog[i].post; + '</p>'; 
    blogStructure += '<p>' + blog[i].tags; + '</p>'; 
};

blogPost.innerHTML = blogStructure;




// title
// date - author - category
// tags: web, design, html
// image - post

// title
// date - author - category
// tags: web, design, html
// post
// image - post