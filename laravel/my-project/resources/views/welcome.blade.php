<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
  <ul>
    <li><button class="text-3xl font-bold bg-red-600" id="m01"  OnClick="getid(this.id)">Hello world!</button>
    <div><p class="text-3xl font-bold bg-slate-600 hidden" id="xy">wa chbih el louz mambouz</p></div>
    </li>
</ul>
<script>
 /* h='m01';
  const hw=document.querySelector('#'+h);
  const xy=document.querySelector('#xy');

  hw.addEventListener('click', ()=>{
      if(xy.classList.contains('hidden'))
      {
        xy.classList.remove('hidden');
      }
      else
      {
        xy.classList.add('hidden');
      }
    
  });*/
  a=<?php echo 'hhhhh';?>
  document.write(a);
</script>
<script>
  /*
  $(document).ready(function(){
  $(a).click(function(){
    $("p").toggle();
  });
});*/
</script>
</body>
</html>