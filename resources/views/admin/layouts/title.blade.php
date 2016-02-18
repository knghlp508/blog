@section('title')
<!-- 标题 -->
<div class="page-title">
    <!-- 左边当前所在区域名称及说明start -->
    <div class="title-env">
        <h1 class="title">{{$shareDatas['currentTitles']['title']}}</h1>
        <p class="description">{{$shareDatas['currentTitles']['remark']}}</p>
    </div>
    <!-- 左边当前所在区域名称及说明end -->

    <!-- 右边当前所在区域位置start -->
    <div class="breadcrumb-env">
        <ol class="breadcrumb bc-1">
            @foreach($shareDatas['currentTitles']['path'] as $pathKey=>$path)
                @if($path!=end($shareDatas['currentTitles']['path']))
                    <li>
                        <a href="dashboard-1.html">
                            @if($pathKey==0)
                            <i class="fa-home"></i>
                            @endif
                            {{$path}}
                        </a>
                    </li>
                @else
                    <li class="active">
                        <strong>{{$path}}</strong>
                    </li>
                @endif
            @endforeach
        </ol>
    </div>
    <!-- 右边当前所在区域位置end -->
</div>
@endsection