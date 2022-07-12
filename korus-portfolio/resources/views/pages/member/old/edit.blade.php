@extends("master")
 @section('content')

 <div id="editmember_upper">
     <div class="newpicture_block">
         <form action="{{ url('tag/old/store') }}" id="newmember_form" method="post" enctype="multipart/form-data">
             @csrf
                     <label for="newmember_file" class="newpost_labels">Tag képe:</label>
                     <input type="file" name="file" id="newmember_file">
                     <br>
                     <label for="newmember_name" class="newpost_labels">Tag neve:</label>
                     <input type="text" name="name" id="newmember_name" value="">
                     <input type="submit" value="Hozzáadás">
         </form>
     </div>
 </div>
 <div class="clear"></div>
 <div id='update_members'>
     @foreach($members as $mem)
     <div class='up_pic_div'>
 		<div class="hir-button up_pic_del">
             <a href="{{  url('tag/old/delete/'.$mem->id) }}" class="del_pic">TÖRLÉS</a>
 		</div>
         <div class='up_pic_holder'>
             <img src="{{url('/uploadfolder/members/'.$mem->source)}}" class="up_pic_img">
         </div>
     </div>
     @endforeach
 </div>

 @endsection
