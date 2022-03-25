@extends('layouts.app')

@section('content')
<style>
.item1 {
  grid-area: myArea;
  

}

.grid-container {
  display: grid;
  grid-template-areas: 'myArea myArea myArea myArea ';
  grid-gap: 10px;

  padding: 10px;
  margin-top:1rem;
 
}

.grid-container > div {
  background-color: black;
  text-align: center;
  padding: 20px 0;
  font-size: 18px;
  
}
  @media only screen and (max-width: 768px) {
    .grid-container {

  grid-template-areas: 'myArea''myArea''myArea''myArea';

}
}

</style>
    <div style="width:100vw" class="row justify-content-center">
    <div class="p-5 text-center text-white bg-dark">
    <h1 class="mb-3">FLASH CARDS</h1>
    <h4 class="mb-3">"Help you focus on what you dont know"</h4>
 
  </div>
    
</div>
<h1 class="mb-3 mt-5 text-center">Flashcards Concept</h1>
<div class="grid-container">

  <div class="item2" style="background-color:#d26e96;color:white">
    <h3>1</h3>
    <p>Flashcards are a study or memorisation tool, with 
information on one or both sides. Using flashcards is a versatile learning 
strategy that benefits 
students of all ages.</p>
  </div>
  <div class="item3" style="background-color:#ff5050;color:white">    <h3>2</h3>
    <p>When used properly, 
flashcards can be 
effective at imprinting 
information into our short and long term memory.</p></div>  
  <div class="item4" style="background-color:#6eb4f5;color:white">    <h3>3</h3>
    <p>The effectiveness of 
learning sessions using flashcards relies on how frequently you revisit the information and revise what you’ve learned.</p></div>
  <div class="item5" style="background-color:#a0c382;color:white;margin-right:0.5rem">    <h3>4</h3>
    <p>Spaced Practice is one of the strategies learners can use to prevent us from losing information we’ve learned and begin embedding it into our long term memory.</p></div>

</div>

@endsection
