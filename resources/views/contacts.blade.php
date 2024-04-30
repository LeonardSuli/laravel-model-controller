@extends('layouts.app')

@section('pageTitle', 'Contacts')
 
@section('content')

<div class="container">
    
   <h1>Contacts</h1>

   <form action="" method="get">

      <div class="mb-3">
         <label for="name" class="form-label">Name</label>
         <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Write a name..." />
         <small id="helpId" class="form-text text-muted">Help text</small>
      </div>

      <div class="mb-3">
         <label for="email" class="form-label">Email</label>
         <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="abc@mail.com" />
         <small id="emailHelpId" class="form-text text-muted">Help text</small>
      </div>

      <div class="mb-3">
         <label for="message" class="form-label">Message</label>
         <textarea class="form-control" name="message" id="message" rows="3"></textarea>
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
      
   </form>

</div>


@endsection