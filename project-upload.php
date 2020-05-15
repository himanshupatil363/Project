@extends('layouts.editapp')

@section('content')

<div class="slice slice-sm bg-section-secondary" x-data>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <form enctype="multipart/form-data" id="form" method="POST" id="form"
                            action="{{route('upload.update',$user->upload->id)}}">
                            @method("PATCH")

                            <div class="align-items-center">
                                @csrf
                                <div class="row align-items-center">
                                    <div class="col-sm-4 text-center">
                                        <img src="{{Storage::url($upload->student_image)}}" alt="" x-ref='student_image'
                                            class=" mb-2 img-thumbnail border">
                                        <div>
                                            <input type="file" accept="image/*" name="student_image" id="student_image"
                                                class="custom-input-file"
                                                @change="readerFile = new FileReader(); readerFile.onload = function(loadEvent){ $refs.student_image.src=loadEvent.target.result }; readerFile.readAsDataURL($event.target.files[0])" />
                                            <label for="student_image">
                                                <i data-feather="upload"></i>
                                                <span>Student Photho</span>
                                            </label>
                                        </div>
                                        @error('student_image')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <img src="{{Storage::url($upload->father_image)}}" alt="" x-ref='father_image'
                                            class=" mb-2 img-thumbnail border">
                                        <div>
                                            <input type="file" accept="image/*" name="father_image" id="father_image"
                                                class="custom-input-file"
                                                @change="readerFile = new FileReader();readerFile.onload = function(loadEvent){ $refs.father_image.src=loadEvent.target.result }; readerFile.readAsDataURL($event.target.files[0]);$('#form')[0].reportValidity();" />
                                            <label for="father_image">
                                                <i data-feather="upload"></i>
                                                <span>Father's Photho</span>
                                            </label>
                                        </div>
                                        @error('father_image')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-4 text-center">
                                        <img src="{{Storage::url($upload->mother_image)}}" alt="" x-ref='mother_image'
                                            class=" mb-2 img-thumbnail border">
                                        <div>
                                            <input type="file" accept="image/*" name="mother_image" id="mother_image"
                                                class="custom-input-file"
                                                @change="readerFile = new FileReader(); readerFile.onload = function(loadEvent){ $refs.mother_image.src=loadEvent.target.result }; readerFile.readAsDataURL($event.target.files[0])" />
                                            <label for="mother_image">
                                                <i data-feather="upload"></i>
                                                <span>Mother Photho</span>
                                            </label>
                                        </div>
                                        @error('mother_image')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 text-center p-4">
                                        <img src="{{Storage::url($upload->signature_image)}}" alt=""
                                            x-ref='signature_image' class=" mb-2 img-thumbnail border">
                                        <div>
                                            <input type="file" accept="image/*" name="signature_image"
                                                id="signature_image" class="custom-input-file"
                                                @change="readerFile = new FileReader(); readerFile.onload = function(loadEvent){ $refs.signature_image.src=loadEvent.target.result }; readerFile.readAsDataURL($event.target.files[0])" />
                                            <label for="signature_image">
                                                <i data-feather="upload"></i>
                                                <span>Signature Image</span>
                                            </label>
                                        </div>
                                        @error('signature_image')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-12 text-center">
                                                <div>
                                                    <input type="file" name="aadhar_card" id="aadhar_card"
                                                        class="custom-input-file" />
                                                    <label for="aadhar_card">
                                                        <i data-feather="upload"></i>
                                                        <span> Aadhar Card </span>
                                                    </label>
                                                </div>
                                                @error('aadhar_card')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-12 my-2 text-center">
                                                <div>
                                                    <input type="file" name="file1" id="file1"
                                                        class="custom-input-file" />
                                                    <label for="file1">
                                                        <i data-feather="upload"></i>
                                                        <span>File 1 (PDF,JPG,PNG)</span>
                                                    </label>
                                                </div>
                                                @error('file1')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-12 text-center">
                                                <div>
                                                    <input type="file" name="file2" id="file2"
                                                        class="custom-input-file" />
                                                    <label for="file2">
                                                        <i data-feather="upload"></i>
                                                        <span>File 2 (PDF,JPG,PNG)</span>
                                                    </label>
                                                </div>
                                                @error('file2')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
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