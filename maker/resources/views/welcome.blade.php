@extends('layouts.master')

@section('content')
    <div class="page-header" id="banner">
        <div class="row">
          <div class="col-lg-8 col-md-7 col-sm-6">
            <h1>Maker</h1>
            <p class="lead">The brave and the blue</p>
          </div>
          <div class="col-lg-4 col-md-5 col-sm-6">
            <h1>Laravel dev</h1>
            <p>Simplicity at it's best</p>
          </div>
        </div>
      </div>
      <!-- Blockquotes -->
        <br />
        <br />
      <div class="row">
          <div class="col-lg-12">
            <h4 id="type-blockquotes">Quotes</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="bs-component">
              <blockquote class="blockquote">
                <p class="mb-0">If I am a cup maker, I'm interested in making the best cup I possibly can. My effort goes into that cup, not what people think about it.</p>
                <footer class="blockquote-footer">by <cite title="Source Title">Denzel Washington</cite></footer>
              </blockquote>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="bs-component">
              <blockquote class="blockquote text-center">
                <p class="mb-0">What you really fear is inside yourself. You fear your own power. You fear your anger, the drive to do great or terrible things.</p>
                <footer class="blockquote-footer">Ra's Al Ghul in <cite title="Source Title">Batman Begins</cite></footer>
              </blockquote>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="bs-component">
              <blockquote class="blockquote text-right">
                <p class="mb-0">I think a simple rule of business is, if you do the things that are easier first, then you can actually make a lot of progress in future.</p>
                <footer class="blockquote-footer">by <cite title="Source Title">Mark Zuckerberg</cite></footer>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
@endsection