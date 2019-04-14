<div class="bar-placeholder"></div>
    <?php 
        if (Request::path() === 'admin-dash/videos') {
           $page = '<span> > Videos </span>';
           $curpage = true;
        }elseif (Request::path() === 'admin-dash/flagged-videos') {
            $page = '<span> > Flagged Videos </span>';
            $curpage = true;
        }elseif (Request::path() === 'admin-dash/users') {
            $page = '<span> > Users </span>';
            $curpage = true;
        }else {
            $page = '';
        }
    ?>
<div class="s-bar">
    <ul>
        <li><a href="{{route('admin-dash')}}">Dashboard</a></li>
        <li><a href="{{route('allv')}}">Videos</a></li>
        <li><a href="{{route('allu')}}" >Users</a></li>
        <li><a href="/admin-dash/flagged-videos" <?php echo (Request::path() === 'admin-dash/flagged-videos') ? 'class="curpage"' : ''; ?>>Flag Videos</a></li>
        <li><a href="{{route('comments')}}">Comments</a></li>
        <li><a href="#">User Critics</a></li>
        <li><a href="#">Suggestion Box</a></li>
        <li><a href="#">Settings</a></li>
    </ul>
</div>
<div class="mDiv">
<h3><span id="" aria-haspopup="true" aria-expanded="false" class="m-icon hdash"><div class="menu-dots"><span></span> <span></span> <span></span></div></span>Dashboard
    <?php echo $page; ?>
</h3>
<div class="col-md-12">