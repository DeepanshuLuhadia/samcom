
 <aside class="sidebar-shell sidebar-bg">
        <div class="menuIcon">
          <span></span>
        </div>

        <ul class="navigation-list">
          <li class="nav-items <?= Request::segment(1)  =='home' ? 'active' : '' ?> ">
            <a href="{{route('admin.home')}}" class="nav-text"
              ><i class="nav-icons"><img src="{{asset('frontend/images/home-icon.svg')}}" /></i>
              <span class="text">home</span></a
            >
          </li>
          <li class="nav-items <?= Request::segment(1)  =='user' ? 'active' : '' ?> ">
            <a href="{{route('admin.user.index')}}" class="nav-text"
              ><i class="nav-icons"><img src="{{asset('frontend/images/customer-icon.svg')}}" /></i>
              <span class="text">User</span></a
            >
          </li>
          
      </aside>

 <script type="text/javascript">
    $(document).ready(function(){
    $(".menuIcon").on("click", function(){
      $(this).toggleClass("active");
      $(".sidebar-shell").toggleClass("active");
    });
  });
  </script>

<script type="text/javascript">
    function logout(event){
            event.preventDefault();
            var check = confirm("Do you really want to logout?");
            if(check){ 
               document.getElementById('logout-form').submit();
            }
     }
</script>