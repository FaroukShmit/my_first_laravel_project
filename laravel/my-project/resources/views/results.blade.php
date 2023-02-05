<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
             <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body>
      <div class="div">
          <div class="sidebar fixed top-0 bottom-0 text-white lg:left-0 p-2 w-[300px] overflow-y-auto text-center bg-red-700">
            @foreach($data as $d)
               <div class="div1 m-[2px]"> <button id="d{{$d->COL_1}}" Onclick="getID(this.id)">{{$d->COL_2}}</button></div>
               <hr class="text-gray-600">
            @endforeach      
        </div>
        <div class="div2 w-[300px] bg-red-200 fixed top-0 bottom-0 left-[300px] text-center overflow-y-auto">
        @foreach($data as $dd)
                       @foreach($data2 as $d1)
                             <?php
                                if($d1->COL_3==$dd->COL_1)
                                {
                                   echo '<p OnClick="getID(this.id)" class="d'.$d1->COL_3.' hidden text-center m-[2px]" id="'.$d1->COL_1.'"><button>'.$d1->COL_2.'</button></p>';
                                }
                              ?>
                        @endforeach
         @endforeach 
        </div>
        <div class="div3 left-[300px]">
          @foreach($data2 as $d2)
           @foreach($data3 as $d3)
             <?php
                if($d2->COL_1==$d3->COL_1)
                {
                  echo'<img url="'.$d3->COL_2.'" class="'.$d3->COL_1.' hidden">';
                }
             ?>
           @endforeach
          @endforeach
        </div>
<script>
      function getID(id)
      {
        id='.'+id;
        const a=document.querySelectorAll(id);
        for(var i=0;i<a.length; i++)
        {
          if(a[i].classList.contains('hidden'))
          {
            a[i].classList.remove('hidden');
          }
          else
          {
            a[i].classList.add('hidden');
          }
        }
      }
</script>
    </body>
</html>