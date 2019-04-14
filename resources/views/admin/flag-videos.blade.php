@extends('layouts.app')
@section('content')
<div class="admin-pane">
    @include('inc.admin-bar')
            <div class="card table-card">
                <div class="card-header">
                    <h5>Flagged Videos</h5>
                </div>
                <div class="card-block p-b-0">
                    <div class="fv-wrap">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="flagged-v">
                                <div>
                                    <div>
                                        thumbnail
                                    </div>
                                    <div>
                                        the video title
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection