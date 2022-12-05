@extends('layouts.master');

@section('content')
    <!-- Title -->
    <h1 class="h2">
        Social Media
    </h1>

    <div class="row">
        <div class="col">
            <!-- Card -->
            <div class="card border-0 p-md-6">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <p class="lead mb-3">List of Social Media</p>
                            <hr>
                            <form action="{{ route('sm.update') }}" method="post">
                                @csrf
                                <div class="tab-content" id="myTabContent-01">
                                    <div class="tab-pane fade show active" id="preview-tab-pane-01" role="tabpanel"
                                        aria-labelledby="preview-tab-01" tabindex="0">

                                        <div class="mb-3">
                                            <label class="form-label" for="linkedin">LinkedIn</label>
                                            <input type="url" id="linkedin" name="linkedin"
                                                value="{{ isset($sosialMedia->linkedin) ? $sosialMedia->linkedin : '' }}"
                                                class="form-control" placeholder="LinkedIn">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="instagram">Instagram</label>
                                            <input type="url" id="instagram" name="instagram" class="form-control"
                                                value="{{ isset($sosialMedia->instagram) ? $sosialMedia->instagram : '' }}"
                                                placeholder="Instagram">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="dribble">Dribble</label>
                                            <input type="url" id="dribble" name="dribble" class="form-control"
                                                value="{{ isset($sosialMedia->dribble) ? $sosialMedia->dribble : '' }}"
                                                placeholder="Dribble">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="medium">Medium</label>
                                            <input type="url" id="medium" name="medium" class="form-control"
                                                value="{{ isset($sosialMedia->medium) ? $sosialMedia->medium : '' }}"
                                                placeholder="Medium">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="youtube">Youtube</label>
                                            <input type="url" id="youtube" name="youtube" class="form-control"
                                                value="{{ isset($sosialMedia->youtube) ? $sosialMedia->youtube : '' }}"
                                                placeholder="Youtube">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="tiktok">TikTok</label>
                                            <input type="url" id="tiktok" name="tiktok" class="form-control"
                                                value="{{ isset($sosialMedia->tiktok) ? $sosialMedia->tiktok : '' }}"
                                                placeholder="TikTok">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="github">Github</label>
                                            <input type="url" id="github" name="github" class="form-control"
                                                value="{{ isset($sosialMedia->github) ? $sosialMedia->github : '' }}"
                                                placeholder="Github">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="gitlab">Gitlab</label>
                                            <input type="url" id="gitlab" name="gitlab" class="form-control"
                                                value="{{ isset($sosialMedia->gitlab) ? $sosialMedia->gitlab : '' }}"
                                                placeholder="Gitlab">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="bitbucket">Bitbucket</label>
                                            <input type="url" id="bitbucket" name="bitbucket" class="form-control"
                                                value="{{ isset($sosialMedia->bitbucket) ? $sosialMedia->bitbucket : '' }}"
                                                placeholder="Bitbucket">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end mt-5">

                                        <!-- Button -->
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- / .row -->
@endsection
