@extends('layout.app')
@section('content')
    div class="container" style="margin-top: 50px; margin-bottom: 50px">
    <div class="row">
        <h1 class="col">Insert New Player Data</h1>
    </div>
    <div class="row">
        <div class="col">
            <form action="{{ route('nbaplayer') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Player Name :</label>
                    <input type="text" class="form-control" name="Player_Name" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                </div>
                <div class="form-group">
                    <label>Age : </label>
                    <input type="text" class="form-control" name="Age" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                </div>
                <div class="form-group">
                    <label>Position : </label>
                    <input type="text" class="form-control" name="Position" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                </div>
                <div class="form-group">
                    <label>Height :  </label>
                    <input type="text" class="form-control" name="Height" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                </div>
                <div class="form-group">
                    <label>Weight :  </label>
                    <input type="text" class="form-control" name="Weight" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                </div>

                <div class="form-group">
                    <label>Nba Team</label>
                    <select class="custom-select" name="brand_id" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                        @foreach ($nbateam as $nba)
                            <option value="{{ $nba->id }}">{{$provider->merk_provider}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">Submit</button>
            </form>
        </div>
    </div>
    </div>
@endsection
