<!DOCTYPE html>
<html>
<head>
<style> 
div {
    width: 120px;
    height: 120px;
    background: red;
       -webkit-transition: width 2s, height 2s, -webkit-transform 2s; /* Safari */
    transition: width 2s, height 2s, transform 2s;
        position: relative;
    -webkit-animation-name: example; 
    -webkit-animation-duration: 4s; 
    animation-name: example;
     animation-timing-function: linear;
    animation-duration: 6s;
    animation-iteration-count: infinite;
    animation-direction: alternate;  

}

div:hover {
     width: 500px;
    height: 400px;
       -webkit-transform: rotate(1080deg);
	   
}
/* Safari 4.0 - 8.0 */
@-webkit-keyframes example {
    0%   {background-color:red;    left:0px; top:0px;     }
    25%  {background-color:yellow; left:500px; top:0px;   }
    50%  {background-color:blue;   left:500px; top:500px; }
    75%  {background-color:green;  left:0px; top:500px;   }
    100% {background-color:red;    left:0px; top:0px;     }
}
@keyframes example {
    0%   {background-color:red;    left:0px; top:0px;     }
    25%  {background-color:yellow; left:500px; top:0px;   }
    50%  {background-color:blue;   left:500px; top:500px; }
    75%  {background-color:green;  left:0px; top:500px;   }
    100% {background-color:red;    left:0px; top:0px;     }
}
.center_element{
text-align:center;
}
.center_element:hover{
font-size:55px;
}
body {
    background-color: powderblue;
}

@media screen and (min-width: 800px) {
    body {
        background-color: lightgreen;
    }
}
</style>
</head>
<body>

<div class="center_element">AEIOU</div>

<p><strong>Hover</strong> over the  element above, to see the transition effect.</p>

</body>
</html>