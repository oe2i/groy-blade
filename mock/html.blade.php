<main class="container">

	<header id="header">
		<h1>HTML Elements Test</h1>
		<em>A simple tagline with <a href="/">home</a> and a <a href="/link">link</a></em>
		<nav>
			<ul>
				<li><a href="/">Home</a></li>
				<li><a href="#link">Link</a></li>
				<li><a href="#footer">Bottom</a></li>
				<li><a href="javascript:void(0)" onclick="theme.toggle()">Toggle</a></li>
			</ul>
		</nav>
	</header>

	<section>
		<h2>Text Content</h2>
		<p>This is a paragraph with <strong>strong</strong>, <em>em</em>, <b>bold</b>, <i>italic</i>, <u>underline</u>, <small>small</small>, and <mark>mark</mark> text.</p>
		<p>Subscript: H<sub>2</sub>O, Superscript: E=mc<sup>2</sup></p>
		<abbr title="Hypertext Markup Language">HTML</abbr>, <cite>Citation</cite>, <dfn>Definition</dfn>
		<time datetime="2025-01-01">January 1, 2025</time>
		<br>
		<hr>
	</section>

	<section id="headings">
		<h2>Headings</h2>
		<h1>Heading 1</h1>
		<h2>Heading 2</h2>
		<h3>Heading 3</h3>
		<h4>Heading 4</h4>
		<h5>Heading 5</h5>
		<h6>Heading 6</h6>
	</section>

	<section>
		<h2>Lists</h2>
		<ul>
			<li>Unordered Item</li>
			<li>Another Item</li>
		</ul>
		<ol>
			<li>Ordered Item</li>
			<li>Another Item</li>
		</ol>
		<dl>
			<dt>Term</dt>
			<dd>Description</dd>
		</dl>
	</section>

	<section>
		<h2>Forms</h2>
		<form>
			<fieldset>
				<legend>Form Controls</legend>
				<label for="text">Text:</label>
				<input type="text" id="text"><br>

				<label for="password">Password:</label>
				<input type="password" id="password"><br>

				<label for="email">Email:</label>
				<input type="email" id="email"><br>

				<label><input type="checkbox"> Checkbox</label><br>
				<label><input type="radio" name="radio"> Radio</label><br>

				<label for="select">Select:</label>
				<select id="select">
					<option>Option I</option>
					<option>Option II</option>
					<option>Option III</option>
					<option>Option IV</option>
					<option>Option V</option>
				</select><br>

				<label for="textarea">Textarea:</label><br>
				<textarea id="textarea" rows="4" cols="30"></textarea><br>

				<label for="textarea">Browser (List):</label><br>
				<input list="browsers" name="browser">
				<datalist id="browsers">
					<option value="Chrome">
					<option value="Chromium">
					<option value="Firefox">
					<option value="Safari">
					<option value="Opera">
				</datalist>
				<br>

				<div class="button-group">
					<input type="submit" value="Submit">
					<input type="reset" value="Reset">
					<button type="button">Button</button>
				</div>

			</fieldset>
		</form>
	</section>

	<section>
		<h2>Table</h2>
		<table>
			<caption>Sample Table</caption>
			<thead>
				<tr>
					<th>Header 1</th>
					<th>Header 2</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Cell 1</td>
					<td>Cell 2</td>
				</tr>
				<tr>
					<td>Cell 3</td>
					<td>Cell 4</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="2">Footer</td>
				</tr>
			</tfoot>
		</table>
	</section>

	<section>
		<h2>Code & Pre</h2>
		<code>inline code</code>
		<pre>
					function test() {
						console.log('Hello World');
					}
			</pre>
		<kbd>Ctrl + S</kbd>, <samp>Sample Output</samp>, <var>x</var>
	</section>

	<section>
		<h2>Media</h2>
		<img src="//picsum.photos/200" alt="Placeholder image">
		<figure>
			<img src="//picsum.photos/200?random=2" alt="Figure Image">
			<figcaption>Figure caption</figcaption>
		</figure>
		<audio controls>
			<source src="//samplelib.com/lib/preview/mp3/sample-15s.mp3" type="audio/mpeg">
			Your browser does not support the audio element.
		</audio>
		<video width="320" height="240" controls>
			<source src="//commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>
	</section>

	<section>
		<h2>Semantic & Structural</h2>
		<article>
			<header>
				<h3>Article Title</h3>
			</header>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id auctor risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam augue diam, congue at fermentum eu, fermentum sed quam. Curabitur a metus ante. Suspendisse potenti. Curabitur lacinia nulla mollis ipsum hendrerit mattis. Donec eget quam sit amet mi tempus fringilla in eget nunc. Morbi commodo volutpat ullamcorper.</p>
			<p>Donec iaculis dui metus, eget condimentum est lobortis sit amet. Donec fermentum, lacus ut aliquet sodales, urna risus sagittis purus, non mollis purus massa eu odio. Suspendisse gravida nec nisi et lacinia. Aliquam pellentesque sapien vitae sapien egestas, mollis tristique augue mattis. Proin ac quam nec turpis accumsan interdum. Curabitur vestibulum nisl in congue pretium. Pellentesque ut dictum dolor. Mauris vitae arcu aliquam, fermentum justo eu, gravida urna. Nam vitae ante ipsum. Ut condimentum felis ut eleifend facilisis. Nunc tempus aliquam dictum. Aliquam egestas eros nibh, at fringilla sem rhoncus sed. Nulla facilisi. Phasellus ac accumsan nisl. Proin ultricies dapibus urna in elementum. Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
			<footer>Lorem Ipsum Footer - <a href="#headings">Go to Headings</a></footer>
		</article>

		<aside>
			<h3>The Aside!</h3>
			<p>Nam efficitur sem nec ullamcorper mattis. Donec ut mi diam. Phasellus efficitur in arcu quis pulvinar. Suspendisse elementum dui nec luctus molestie. Nam felis eros, mollis vitae eleifend in, vehicula quis mauris. Quisque nulla eros, dignissim in lorem eget, mollis ultrices urna. Fusce venenatis elit ac odio condimentum, quis elementum sapien accumsan. </p>
		</aside>

		<h2>Cities</h2>
		<details name="cities">
			<summary>List of Cities</summary>
			<ul>
				<li>Benin</li>
				<li>Lagos</li>
				<li>Abuja</li>
				<li>FCT</li>
				<li>Warri</li>
				<li>Kaduna</li>
			</ul>
			<p><em>Everything here is hidden until toggled</em></p>
		</details>

		<dialog open>This is a dialog.</dialog>
		<blockquote cite="https://example.com">
			“This is a blockquote from a source.”
		</blockquote>
		<address>123 Web Ave, HTML City</address>
	</section>
</main>

<footer id="footer">
	<p>&copy; 2025 Example. <a href="#header">Back to top</a></p>
</footer>