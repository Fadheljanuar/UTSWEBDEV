@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="row">
            <h1 class="col">Edit Data Mobil</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('nbaplayers', $team) }}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>Player Name :</label>
                        <input type="text" class="form-control" name="PlayerName" value="{{ $team->PlayerName }}" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>Age : </label>
                        <input class="form-control" value="{{ $team->Age }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Position : </label>
                        <input class="form-control" value="{{ $team->Position }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Height :  </label>
                        <input class="form-control" value="{{ $team->height }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Weight :  </label>
                        <input class="form-control" value="{{ $team->Weight }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Nba Team:</label>
                        <select class="custom-select" name="NbaTeam" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                            @foreach ($team as $nbateam)
                                @if ($team->mobiled_by == $team->id) {
                                <option value="{{ $team->id }}" selected>{{$team->team . ' (' . $team->nbateam .')'}}</option>
                                }
                                @else{
                                <option value="{{ $team->id }}">{{$team->team . ' (' . $team->nbateam .')'}}</option>
                                }
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
