
<!-- Archive Widget -->
<div class="card my-4">
    <h5 class="card-header"><i class="fa fa-archive"></i> Archives</h5>
    <div class="card-body">
        <div class="row">
            <ul>
                @foreach($archive as $status)
                    <li>
                        <a href="/?month={{ $status['month'] }}&year={{ $status['year'] }}">
                            {{ $status['month'].' '. $status['year'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

<!-- Tags Widget -->
<div class="card my-4">
    <h5 class="card-header"><i class="fa fa-tags"></i> Tags</h5>
    <div class="card-body">
        <div class="row">
            <ul>
                @foreach($tags as $tag)
                    <li>
                        <a href="/posts/tags/{{ $tag}}">
                            {{ $tag }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>