@extends('layouts.editapp')

@section('content')

<div class="slice slice-sm bg-section-secondary" x-data>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <form enctype="multipart/form-data" id="form" method="POST" id="form"
                            action="{{ route('upload.update',$user->upload->id) }}">
                            @method("PATCH")

                            <div class="align-items-center">
                                @csrf
                                <div class="row align-items-center">
                                    <div class="col-sm-4 text-center">
                                        <img src="{{ Storage::url($upload->image_1) }}" alt=""
                                            x-ref='image_1' class=" mb-2 img-thumbnail border">
                                        <div>
                                            <input type="file" accept="image/*" name="image_1" id="image_1"
                                                class="custom-input-file" <blade
                                                change|%3D%26%2334%3BreaderFile%20%3D%20new%20FileReader()%3B%20readerFile.onload%20%3D%20function(loadEvent)%7B%20%24refs.image_1.src%3DloadEvent.target.result%20%7D%3B%20readerFile.readAsDataURL(%24event.target.files%5B0%5D)%26%2334%3B%20%2F%3E%0D>
                                            <label for="image_1">
                                                <i data-feather="upload"></i>
                                                <span>Student Photho</span>
                                            </label>
                                        </div>
                                        @error('image_1')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <img src="{{ Storage::url($upload->image_2) }}" alt="" x-ref='image_2'
                                            class=" mb-2 img-thumbnail border">
                                        <div>
                                            <input type="file" accept="image/*" name="image_2" id="image_2"
                                                class="custom-input-file" <blade
                                                change|%3D%26%2334%3BreaderFile%20%3D%20new%20FileReader()%3BreaderFile.onload%20%3D%20function(loadEvent)%7B%20%24refs.image_2.src%3DloadEvent.target.result%20%7D%3B%20readerFile.readAsDataURL(%24event.target.files%5B0%5D)%3B%24(%26%2339%3B%23form%26%2339%3B)%5B0%5D.reportValidity()%3B%26%2334%3B%20%2F%3E%0D>
                                            <label for="image_2">
                                                <i data-feather="upload"></i>
                                                <span>Father's Photho</span>
                                            </label>
                                        </div>
                                        @error('image_2')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <img src="{{ Storage::url($upload->image_3) }}" alt="" x-ref='image_3'
                                            class=" mb-2 img-thumbnail border">
                                        <div>
                                            <input type="file" accept="image/*" name="image_3" id="image_3"
                                                class="custom-input-file" <blade
                                                change|%3D%26%2334%3BreaderFile%20%3D%20new%20FileReader()%3B%20readerFile.onload%20%3D%20function(loadEvent)%7B%20%24refs.image_3.src%3DloadEvent.target.result%20%7D%3B%20readerFile.readAsDataURL(%24event.target.files%5B0%5D)%26%2334%3B%20%2F%3E%0D>
                                            <label for="image_3">
                                                <i data-feather="upload"></i>
                                                <span>Mother Photho</span>
                                            </label>
                                        </div>
                                        @error('image_3')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="align-items-center">
                                @csrf
                                <div class="row align-items-center">
                                    <div class="col-sm-4 text-center">
                                        <img src="{{ Storage::url($upload->image_4) }}" alt=""
                                            x-ref='image_4' class=" mb-2 img-thumbnail border">
                                        <div>
                                            <input type="file" accept="image/*" name="image_4" id="image_4"
                                                class="custom-input-file" <blade
                                                change|%3D%26%2334%3BreaderFile%20%3D%20new%20FileReader()%3B%20readerFile.onload%20%3D%20function(loadEvent)%7B%20%24refs.image_4.src%3DloadEvent.target.result%20%7D%3B%20readerFile.readAsDataURL(%24event.target.files%5B0%5D)%26%2334%3B%20%2F%3E%0D>
                                            <label for="image_4">
                                                <i data-feather="upload"></i>
                                                <span>Student Photho</span>
                                            </label>
                                        </div>
                                        @error('image_4')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <img src="{{ Storage::url($upload->image_5) }}" alt="" x-ref='image_5'
                                            class=" mb-2 img-thumbnail border">
                                        <div>
                                            <input type="file" accept="image/*" name="image_5" id="image_5"
                                                class="custom-input-file" <blade
                                                change|%3D%26%2334%3BreaderFile%20%3D%20new%20FileReader()%3BreaderFile.onload%20%3D%20function(loadEvent)%7B%20%24refs.image_5.src%3DloadEvent.target.result%20%7D%3B%20readerFile.readAsDataURL(%24event.target.files%5B0%5D)%3B%24(%26%2339%3B%23form%26%2339%3B)%5B0%5D.reportValidity()%3B%26%2334%3B%20%2F%3E%0D>
                                            <label for="image_5">
                                                <i data-feather="upload"></i>
                                                <span>Father's Photho</span>
                                            </label>
                                        </div>
                                        @error('image_5')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <img src="{{ Storage::url($upload->image_6) }}" alt="" x-ref='image_6'
                                            class=" mb-2 img-thumbnail border">
                                        <div>
                                            <input type="file" accept="image/*" name="image_6" id="image_6"
                                                class="custom-input-file" <blade
                                                change|%3D%26%2334%3BreaderFile%20%3D%20new%20FileReader()%3B%20readerFile.onload%20%3D%20function(loadEvent)%7B%20%24refs.image_6.src%3DloadEvent.target.result%20%7D%3B%20readerFile.readAsDataURL(%24event.target.files%5B0%5D)%26%2334%3B%20%2F%3E%0D>
                                            <label for="image_6">
                                                <i data-feather="upload"></i>
                                                <span>Mother Photho</span>
                                            </label>
                                        </div>
                                        @error('image_6')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="align-items-center">
                                @csrf
                                <div class="row align-items-center">
                                    <div class="col-sm-4 text-center">
                                        <img src="{{ Storage::url($upload->image_7) }}" alt=""
                                            x-ref='image_7' class=" mb-2 img-thumbnail border">
                                        <div>
                                            <input type="file" accept="image/*" name="image_7" id="image_7"
                                                class="custom-input-file" <blade
                                                change|%3D%26%2334%3BreaderFile%20%3D%20new%20FileReader()%3B%20readerFile.onload%20%3D%20function(loadEvent)%7B%20%24refs.image_7.src%3DloadEvent.target.result%20%7D%3B%20readerFile.readAsDataURL(%24event.target.files%5B0%5D)%26%2334%3B%20%2F%3E%0D>
                                            <label for="image_7">
                                                <i data-feather="upload"></i>
                                                <span>Student Photho</span>
                                            </label>
                                        </div>
                                        @error('image_7')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <img src="{{ Storage::url($upload->image_8) }}" alt="" x-ref='image_8'
                                            class=" mb-2 img-thumbnail border">
                                        <div>
                                            <input type="file" accept="image/*" name="image_8" id="image_8"
                                                class="custom-input-file" <blade
                                                change|%3D%26%2334%3BreaderFile%20%3D%20new%20FileReader()%3BreaderFile.onload%20%3D%20function(loadEvent)%7B%20%24refs.image_8.src%3DloadEvent.target.result%20%7D%3B%20readerFile.readAsDataURL(%24event.target.files%5B0%5D)%3B%24(%26%2339%3B%23form%26%2339%3B)%5B0%5D.reportValidity()%3B%26%2334%3B%20%2F%3E%0D>
                                            <label for="image_8">
                                                <i data-feather="upload"></i>
                                                <span>Father's Photho</span>
                                            </label>
                                        </div>
                                        @error('image_8')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <img src="{{ Storage::url($upload->image_9) }}" alt="" x-ref='image_9'
                                            class=" mb-2 img-thumbnail border">
                                        <div>
                                            <input type="file" accept="image/*" name="image_9" id="image_9"
                                                class="custom-input-file" <blade
                                                change|%3D%26%2334%3BreaderFile%20%3D%20new%20FileReader()%3B%20readerFile.onload%20%3D%20function(loadEvent)%7B%20%24refs.image_9.src%3DloadEvent.target.result%20%7D%3B%20readerFile.readAsDataURL(%24event.target.files%5B0%5D)%26%2334%3B%20%2F%3E%0D>
                                            <label for="image_9">
                                                <i data-feather="upload"></i>
                                                <span>Mother Photho</span>
                                            </label>
                                        </div>
                                        @error('image_9')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="align-items-center">
                                @csrf
                                <div class="row align-items-center">
                                    <div class="col-sm-4 text-center">
                                        <img src="{{ Storage::url($upload->image_10) }}" alt=""
                                            x-ref='image_10' class=" mb-2 img-thumbnail border">
                                        <div>
                                            <input type="file" accept="image/*" name="image_10" id="image_10"
                                                class="custom-input-file" <blade
                                                change|%3D%26%2334%3BreaderFile%20%3D%20new%20FileReader()%3B%20readerFile.onload%20%3D%20function(loadEvent)%7B%20%24refs.image_10.src%3DloadEvent.target.result%20%7D%3B%20readerFile.readAsDataURL(%24event.target.files%5B0%5D)%26%2334%3B%20%2F%3E%0D>
                                            <label for="image_10">
                                                <i data-feather="upload"></i>
                                                <span>Student Photho</span>
                                            </label>
                                        </div>
                                        @error('image_10')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <img src="{{ Storage::url($upload->image_11) }}" alt="" x-ref='image_11'
                                            class=" mb-2 img-thumbnail border">
                                        <div>
                                            <input type="file" accept="image/*" name="image_11" id="image_11"
                                                class="custom-input-file" <blade
                                                change|%3D%26%2334%3BreaderFile%20%3D%20new%20FileReader()%3BreaderFile.onload%20%3D%20function(loadEvent)%7B%20%24refs.image_11.src%3DloadEvent.target.result%20%7D%3B%20readerFile.readAsDataURL(%24event.target.files%5B0%5D)%3B%24(%26%2339%3B%23form%26%2339%3B)%5B0%5D.reportValidity()%3B%26%2334%3B%20%2F%3E%0D>
                                            <label for="image_11">
                                                <i data-feather="upload"></i>
                                                <span>Father's Photho</span>
                                            </label>
                                        </div>
                                        @error('image_11')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <img src="{{ Storage::url($upload->image_12) }}" alt="" x-ref='image_12'
                                            class=" mb-2 img-thumbnail border">
                                        <div>
                                            <input type="file" accept="image/*" name="image_12" id="image_12"
                                                class="custom-input-file" <blade
                                                change|%3D%26%2334%3BreaderFile%20%3D%20new%20FileReader()%3B%20readerFile.onload%20%3D%20function(loadEvent)%7B%20%24refs.image_12.src%3DloadEvent.target.result%20%7D%3B%20readerFile.readAsDataURL(%24event.target.files%5B0%5D)%26%2334%3B%20%2F%3E%0D>
                                            <label for="image_12">
                                                <i data-feather="upload"></i>
                                                <span>Mother Photho</span>
                                            </label>
                                        </div>
                                        @error('image_12')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="align-items-center">
                                @csrf
                                <div class="row align-items-center">
                                    <div class="col-sm-4 text-center">
                                        <img src="{{ Storage::url($upload->image_13) }}" alt=""
                                            x-ref='image_13' class=" mb-2 img-thumbnail border">
                                        <div>
                                            <input type="file" accept="image/*" name="image_13" id="image_13"
                                                class="custom-input-file" <blade
                                                change|%3D%26%2334%3BreaderFile%20%3D%20new%20FileReader()%3B%20readerFile.onload%20%3D%20function(loadEvent)%7B%20%24refs.image_13.src%3DloadEvent.target.result%20%7D%3B%20readerFile.readAsDataURL(%24event.target.files%5B0%5D)%26%2334%3B%20%2F%3E%0D>
                                            <label for="image_13">
                                                <i data-feather="upload"></i>
                                                <span>Student Photho</span>
                                            </label>
                                        </div>
                                        @error('image_13')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <img src="{{ Storage::url($upload->image_14) }}" alt="" x-ref='image_14'
                                            class=" mb-2 img-thumbnail border">
                                        <div>
                                            <input type="file" accept="image/*" name="image_14" id="image_14"
                                                class="custom-input-file" <blade
                                                change|%3D%26%2334%3BreaderFile%20%3D%20new%20FileReader()%3BreaderFile.onload%20%3D%20function(loadEvent)%7B%20%24refs.image_14.src%3DloadEvent.target.result%20%7D%3B%20readerFile.readAsDataURL(%24event.target.files%5B0%5D)%3B%24(%26%2339%3B%23form%26%2339%3B)%5B0%5D.reportValidity()%3B%26%2334%3B%20%2F%3E%0D>
                                            <label for="image_14">
                                                <i data-feather="upload"></i>
                                                <span>Father's Photho</span>
                                            </label>
                                        </div>
                                        @error('image_14')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <img src="{{ Storage::url($upload->image_15) }}" alt="" x-ref='image_15'
                                            class=" mb-2 img-thumbnail border">
                                        <div>
                                            <input type="file" accept="image/*" name="image_15" id="image_15"
                                                class="custom-input-file" <blade
                                                change|%3D%26%2334%3BreaderFile%20%3D%20new%20FileReader()%3B%20readerFile.onload%20%3D%20function(loadEvent)%7B%20%24refs.image_15.src%3DloadEvent.target.result%20%7D%3B%20readerFile.readAsDataURL(%24event.target.files%5B0%5D)%26%2334%3B%20%2F%3E%0D>
                                            <label for="image_15">
                                                <i data-feather="upload"></i>
                                                <span>Mother Photho</span>
                                            </label>
                                        </div>
                                        @error('image_15')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="align-items-center">
                                @csrf
                                <div class="row align-items-center">
                                    <div class="col-sm-4 text-center">
                                        <img src="{{ Storage::url($upload->image_16) }}" alt=""
                                            x-ref='image_16' class=" mb-2 img-thumbnail border">
                                        <div>
                                            <input type="file" accept="image/*" name="image_16" id="image_16"
                                                class="custom-input-file" <blade
                                                change|%3D%26%2334%3BreaderFile%20%3D%20new%20FileReader()%3B%20readerFile.onload%20%3D%20function(loadEvent)%7B%20%24refs.image_16.src%3DloadEvent.target.result%20%7D%3B%20readerFile.readAsDataURL(%24event.target.files%5B0%5D)%26%2334%3B%20%2F%3E%0D>
                                            <label for="image_16">
                                                <i data-feather="upload"></i>
                                                <span>Student Photho</span>
                                            </label>
                                        </div>
                                        @error('image_16')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <img src="{{ Storage::url($upload->image_17) }}" alt="" x-ref='image_17'
                                            class=" mb-2 img-thumbnail border">
                                        <div>
                                            <input type="file" accept="image/*" name="image_17" id="image_17"
                                                class="custom-input-file" <blade
                                                change|%3D%26%2334%3BreaderFile%20%3D%20new%20FileReader()%3BreaderFile.onload%20%3D%20function(loadEvent)%7B%20%24refs.image_17.src%3DloadEvent.target.result%20%7D%3B%20readerFile.readAsDataURL(%24event.target.files%5B0%5D)%3B%24(%26%2339%3B%23form%26%2339%3B)%5B0%5D.reportValidity()%3B%26%2334%3B%20%2F%3E%0D>
                                            <label for="image_17">
                                                <i data-feather="upload"></i>
                                                <span>Father's Photho</span>
                                            </label>
                                        </div>
                                        @error('image_17')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <img src="{{ Storage::url($upload->image_18) }}" alt="" x-ref='image_18'
                                            class=" mb-2 img-thumbnail border">
                                        <div>
                                            <input type="file" accept="image/*" name="image_18" id="image_18"
                                                class="custom-input-file" <blade
                                                change|%3D%26%2334%3BreaderFile%20%3D%20new%20FileReader()%3B%20readerFile.onload%20%3D%20function(loadEvent)%7B%20%24refs.image_18.src%3DloadEvent.target.result%20%7D%3B%20readerFile.readAsDataURL(%24event.target.files%5B0%5D)%26%2334%3B%20%2F%3E%0D>
                                            <label for="image_18">
                                                <i data-feather="upload"></i>
                                                <span>Mother Photho</span>
                                            </label>
                                        </div>
                                        @error('image_18')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="mt-3">
                        <button type="sumbit" @click.prevent="if(!$('#form')[0].checkValidity()){$('#form')[0].reportValidity();}else{Swal.fire({title: 'Are you sure?',text: 'You wont be able to revert this!',icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, Sumbit it!'
}).then((result) => {
  if (result.value) {
    $( '#form').submit();
  }
});}" class="btn btn-sm btn-primary">Save</button>
                        <button type="reset" class="btn btn-sm btn-danger">Reset</button>
                    </div>

                </div>
                </form>
            </div>
        </div>
    </div>

</div>
</div>


@endsection