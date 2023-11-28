@extends('layouts.main')
@section('container')

<div class="theme theme-dark">
	<div class="bracket  disable-image d-flex">
		<div class="column one">
			<div class="match winner-top">
				<div class="match-top team">
					<span class="image"></span>
					<span class="seed">1</span>
					<span class="name">{{ $turnamens->entry_fee}}</span>
					<span class="score">2</span>
				</div>
				<div class="match-bottom team">
					<span class="image"></span>
					<span class="seed">8</span>
					<span class="name">D.C. Senators</span>
					<span class="score">1</span>
				</div>
				<div class="match-lines">
					<div class="line one"></div>
					<div class="line two"></div>
				</div>
				<div class="match-lines alt">
					<div class="line one"></div>
				</div>
			</div>

			<div class="match winner-bottom">
				<div class="match-top team">
					<span class="image"></span>
					<span class="seed">4</span>
					<span class="name">New Orleans Rockstars</span>
					<span class="score">1</span>
				</div>
				<div class="match-bottom team">
					<span class="image"></span>
					<span class="seed">5</span>
					<span class="name">West Virginia Runners</span>
					<span class="score">2</span>
				</div>
				<div class="match-lines">
					<div class="line one"></div>
					<div class="line two"></div>
				</div>
				<div class="match-lines alt">
					<div class="line one"></div>
				</div>
			</div>

			<div class="match winner-top">
				<div class="match-top team">
					<span class="image"></span>
					<span class="seed">2</span>
					<span class="name">Denver Demon Horses</span>
					<span class="score">2</span>
				</div>
				<div class="match-bottom team">
					<span class="image"></span>
					<span class="seed">7</span>
					<span class="name">Chicago Pistons</span>
					<span class="score">0</span>
				</div>
				<div class="match-lines">
					<div class="line one"></div>
					<div class="line two"></div>
				</div>
				<div class="match-lines alt">
					<div class="line one"></div>
				</div>
			</div>

			<div class="match winner-top">
				<div class="match-top team">
					<span class="image"></span>
					<span class="seed">3</span>
					<span class="name">San Francisco Porters</span>
					<span class="score">2</span>
				</div>
				<div class="match-bottom team">
					<span class="image"></span>
					<span class="seed">6</span>
					<span class="name">Seattle Climbers</span>
					<span class="score">1</span>
				</div>
				<div class="match-lines">
					<div class="line one"></div>
					<div class="line two"></div>
				</div>
				<div class="match-lines alt">
					<div class="line one"></div>
				</div>
			</div>
		</div>

		<div class="column two">
			<div class="match winner-bottom">
				<div class="match-top team">
					<span class="image"></span>
					<span class="seed">1</span>
					<span class="name">Orlando Jetsetters</span>
					<span class="score">1</span>
				</div>
				<div class="match-bottom team">
					<span class="image"></span>
					<span class="seed">5</span>
					<span class="name">West Virginia Runners</span>
					<span class="score">2</span>
				</div>
				<div class="match-lines">
					<div class="line one"></div>
					<div class="line two"></div>
				</div>
				<div class="match-lines alt">
					<div class="line one"></div>
				</div>
			</div>

			<div class="match winner-bottom">
				<div class="match-top team">
					<span class="image"></span>
					<span class="seed">2</span>
					<span class="name">Denver Demon Horses</span>
					<span class="score">1</span>
				</div>
				<div class="match-bottom team">
					<span class="image"></span>
					<span class="seed">3</span>
					<span class="name">San Francisco Porters</span>
					<span class="score">2</span>
				</div>
				<div class="match-lines">
					<div class="line one"></div>
					<div class="line two"></div>
				</div>
				<div class="match-lines alt">
					<div class="line one"></div>
				</div>
			</div>
		</div>

		<div class="column three">
			<div class="match winner-top">
				<div class="match-top team">
					<span class="image"></span>
					<span class="seed">5</span>
					<span class="name">West Virginia Runners</span>
					<span class="score">3</span>
				</div>
				<div class="match-bottom team">
					<span class="image"></span>
					<span class="seed">3</span>
					<span class="name">San Francisco Porters</span>
					<span class="score">2</span>
				</div>
				<div class="match-lines">
					<div class="line one"></div>
					<div class="line two"></div>
				</div>
				<div class="match-lines alt">
					<div class="line one"></div>
				</div>
			</div>				
		</div>
	</div>
    <div class="bracket  disable-image">
        <div class="column four">
			<div class="match winner-top">
				<div class="match-top team">
					<span class="image"></span>
					<span class="seed">1</span>
					<span class="name">Orlando Jetsetters</span>
					<span class="score">2</span>
				</div>
				<div class="match-bottom team">
					<span class="image"></span>
					<span class="seed">8</span>
					<span class="name">D.C. Senators</span>
					<span class="score">1</span>
				</div>
				<div class="match-lines">
					<div class="line one"></div>
					<div class="line two"></div>
				</div>
				<div class="match-lines alt">
					<div class="line one"></div>
				</div>
			</div>

			<div class="match winner-bottom">
				<div class="match-top team">
					<span class="image"></span>
					<span class="seed">4</span>
					<span class="name">New Orleans Rockstars</span>
					<span class="score">1</span>
				</div>
				<div class="match-bottom team">
					<span class="image"></span>
					<span class="seed">5</span>
					<span class="name">West Virginia Runners</span>
					<span class="score">2</span>
				</div>
				<div class="match-lines">
					<div class="line one"></div>
					<div class="line two"></div>
				</div>
				<div class="match-lines alt">
					<div class="line one"></div>
				</div>
			</div>

			<div class="match winner-top">
				<div class="match-top team">
					<span class="image"></span>
					<span class="seed">2</span>
					<span class="name">Denver Demon Horses</span>
					<span class="score">2</span>
				</div>
				<div class="match-bottom team">
					<span class="image"></span>
					<span class="seed">7</span>
					<span class="name">Chicago Pistons</span>
					<span class="score">0</span>
				</div>
				<div class="match-lines">
					<div class="line one"></div>
					<div class="line two"></div>
				</div>
				<div class="match-lines alt">
					<div class="line one"></div>
				</div>
			</div>

			<div class="match winner-top">
				<div class="match-top team">
					<span class="image"></span>
					<span class="seed">3</span>
					<span class="name">San Francisco Porters</span>
					<span class="score">2</span>
				</div>
				<div class="match-bottom team">
					<span class="image"></span>
					<span class="seed">6</span>
					<span class="name">Seattle Climbers</span>
					<span class="score">1</span>
				</div>
				<div class="match-lines">
					<div class="line one"></div>
					<div class="line two"></div>
				</div>
				<div class="match-lines alt">
					<div class="line one"></div>
				</div>
			</div>
		</div>

		<div class="column five">
			<div class="match winner-bottom">
				<div class="match-top team">
					<span class="image"></span>
					<span class="seed">1</span>
					<span class="name">Orlando Jetsetters</span>
					<span class="score">1</span>
				</div>
				<div class="match-bottom team">
					<span class="image"></span>
					<span class="seed">5</span>
					<span class="name">West Virginia Runners</span>
					<span class="score">2</span>
				</div>
				<div class="match-lines">
					<div class="line one"></div>
					<div class="line two"></div>
				</div>
				<div class="match-lines alt">
					<div class="line one"></div>
				</div>
			</div>

			<div class="match winner-bottom">
				<div class="match-top team">
					<span class="image"></span>
					<span class="seed">2</span>
					<span class="name">Denver Demon Horses</span>
					<span class="score">1</span>
				</div>
				<div class="match-bottom team">
					<span class="image"></span>
					<span class="seed">3</span>
					<span class="name">San Francisco Porters</span>
					<span class="score">2</span>
				</div>
				<div class="match-lines">
					<div class="line one"></div>
					<div class="line two"></div>
				</div>
				<div class="match-lines alt">
					<div class="line one"></div>
				</div>
			</div>
		</div>

		<div class="column six">
			<div class="match winner-top">
				<div class="match-top team">
					<span class="image"></span>
					<span class="seed">5</span>
					<span class="name">West Virginia Runners</span>
					<span class="score">3</span>
				</div>
				<div class="match-bottom team">
					<span class="image"></span>
					<span class="seed">3</span>
					<span class="name">San Francisco Porters</span>
					<span class="score">2</span>
				</div>
				<div class="match-lines">
					<div class="line one"></div>
					<div class="line two"></div>
				</div>
				<div class="match-lines alt">
					<div class="line one"></div>
				</div>
			</div>				
		</div>
    </div>
	<div class="theme-switcher">
		<h2>Select a theme</h2>
		<button id="theme-none">None</button>
		<button id="theme-light">Light</button>
		<button id="theme-dark">Dark</button>
		<button id="theme-dark-trendy">Dark Trendy</button>
	</div>
</div>

<script>


</script>
@endsection