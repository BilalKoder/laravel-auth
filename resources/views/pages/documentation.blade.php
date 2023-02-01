@extends('layouts.front')

@section('content')
<style>
	/* @media only screen {
		body {
			margin: 2em auto;
			max-width: 900px;
			color: rgb(55, 53, 47);
		}
	}
	
	body {
		line-height: 1.5;
		white-space: pre-wrap;
	} */
	
	.documentation-page a,
	.documentation-page a.visited {
		color: inherit;
		text-decoration: underline;
	}
	
	.documentation-page .pdf-relative-link-path {
		font-size: 80%;
		color: #444;
	}
	
	.documentation-page h1,
	.documentation-page h2,
	.documentation-page h3 {
		letter-spacing: -0.01em;
		line-height: 1.2;
		font-weight: 600;
		margin-bottom: 0.5rem;
	}
	
	.documentation-page .page-title {
		font-size: 2.5rem;
		font-weight: 700;
		margin-top: 0;
		margin-bottom: 0.75em;
	}
	
	.documentation-page  h1 {
		font-size: 1.875rem;
		margin-top: 1.875rem;
	}
	
	.documentation-page  h2 {
		font-size: 1.5rem;
		margin-top: 1.5rem;
	}
	
	.documentation-page h3 {
		font-size: 1.25rem;
		margin-top: 1.25rem;
	}
	
	.documentation-page .source {
		border: 1px solid #ddd;
		border-radius: 3px;
		padding: 1.5em;
		word-break: break-all;
	}
	
	.documentation-page .callout {
		border-radius: 3px;
		padding: 1rem;
	}
	
	.documentation-page figure {
		margin: 1.25em 0;
		page-break-inside: avoid;
	}
	
	figcaption {
		opacity: 0.5;
		font-size: 85%;
		margin-top: 0.5em;
	}
	
	.documentation-page mark {
		background-color: transparent;
	}
	
	.documentation-page .indented {
		padding-left: 1.5em;
	}
	
	.documentation-page hr {
		background: transparent;
		display: block;
		width: 100%;
		height: 1px;
		visibility: visible;
		border: none;
		border-bottom: 1px solid rgba(55, 53, 47, 0.09);
	}
	
	.documentation-page img {
		max-width: 100%;
	}
	
	@media only print {
		.documentation-page img {
			max-height: 100vh;
			object-fit: contain;
		}
	}
	
	@page {
		margin: 1in;
	}
	
	.collection-content {
		font-size: 0.875rem;
	}
	
	.column-list {
		display: flex;
		justify-content: space-between;
	}
	
	.documentation-page .column {
		padding: 0 1em;
	}
	
	.documentation-page .column:first-child {
		padding-left: 0;
	}
	
	.documentation-page .column:last-child {
		padding-right: 0;
	}
	
	.table_of_contents-item {
		display: block;
		font-size: 0.875rem;
		line-height: 1.3;
		padding: 0.125rem;
	}
	
	.table_of_contents-indent-1 {
		margin-left: 1.5rem;
	}
	
	.table_of_contents-indent-2 {
		margin-left: 3rem;
	}
	
	.table_of_contents-indent-3 {
		margin-left: 4.5rem;
	}
	
	.table_of_contents-link {
		text-decoration: none;
		opacity: 0.7;
		border-bottom: 1px solid rgba(55, 53, 47, 0.18);
	}
	
	.documentation-page table,
	.documentation-page th,
	.documentation-page td {
		border: 1px solid rgba(55, 53, 47, 0.09);
		border-collapse: collapse;
	}
	
	.documentation-page table {
		border-left: none;
		border-right: none;
	}
	
	.documentation-page th,
	.documentation-page td {
		font-weight: normal;
		padding: 0.25em 0.5em;
		line-height: 1.5;
		min-height: 1.5em;
		text-align: left;
	}
	
	.documentation-page th {
		color: rgba(55, 53, 47, 0.6);
	}
	
	.documentation-page ol,
	.documentation-page ul {
		margin: 0;
		margin-block-start: 0.6em;
		margin-block-end: 0.6em;
	}
	
	.documentation-page li > ol:first-child,
	.documentation-page li > ul:first-child {
		margin-block-start: 0.6em;
	}
	
	.documentation-page ul > li {
		list-style: disc;
	}
	
	.documentation-page ul.to-do-list {
		text-indent: -1.7em;
	}
	
	.documentation-page ul.to-do-list > li {
		list-style: none;
	}
	
	.documentation-page .to-do-children-checked {
		text-decoration: line-through;
		opacity: 0.375;
	}
	
	.documentation-page ul.toggle > li {
		list-style: none;
	}
	
	.documentation-page ul {
		padding-inline-start: 1.7em;
	}
	
	.documentation-page ul > li {
		padding-left: 0.1em;
	}
	
	.documentation-page ol {
		padding-inline-start: 1.6em;
	}
	
	.documentation-page ol > li {
		padding-left: 0.2em;
	}
	
	.mono ol {
		padding-inline-start: 2em;
	}
	
	.mono ol > li {
		text-indent: -0.4em;
	}
	
	.documentation-page .toggle {
		padding-inline-start: 0em;
		list-style-type: none;
	}
	
	/* Indent toggle children */
	.documentation-page .toggle > li > details {
		padding-left: 1.7em;
	}
	
	.documentation-page .toggle > li > details > summary {
		margin-left: -1.1em;
	}
	
	.selected-value {
		display: inline-block;
		padding: 0 0.5em;
		background: rgba(206, 205, 202, 0.5);
		border-radius: 3px;
		margin-right: 0.5em;
		margin-top: 0.3em;
		margin-bottom: 0.3em;
		white-space: nowrap;
	}
	
	.collection-title {
		display: inline-block;
		margin-right: 1em;
	}
	
	.simple-table {
		margin-top: 1em;
		font-size: 0.875rem;
		empty-cells: show;
	}
	.simple-table td {
		height: 29px;
		min-width: 120px;
	}
	
	.simple-table th {
		height: 29px;
		min-width: 120px;
	}
	
	.simple-table-header-color {
		background: rgb(247, 246, 243);
		color: black;
	}
	.simple-table-header {
		font-weight: 500;
	}
	
	time {
		opacity: 0.5;
	}
	
	.icon {
		display: inline-block;
		max-width: 1.2em;
		max-height: 1.2em;
		text-decoration: none;
		vertical-align: text-bottom;
		margin-right: 0.5em;
	}
	
	img.icon {
		border-radius: 3px;
	}
	
	.user-icon {
		width: 1.5em;
		height: 1.5em;
		border-radius: 100%;
		margin-right: 0.5rem;
	}
	
	.user-icon-inner {
		font-size: 0.8em;
	}
	
	.text-icon {
		border: 1px solid #000;
		text-align: center;
	}
	
	.page-cover-image {
		display: block;
		object-fit: cover;
		width: 100%;
		max-height: 30vh;
	}
	
	.page-header-icon {
		font-size: 3rem;
		margin-bottom: 1rem;
	}
	
	.page-header-icon-with-cover {
		margin-top: -0.72em;
		margin-left: 0.07em;
	}
	
	.page-header-icon img {
		border-radius: 3px;
	}
	
	.link-to-page {
		margin: 1em 0;
		padding: 0;
		border: none;
		font-weight: 500;
	}
	
	.documentation-page p > .user {
		opacity: 0.5;
	}
	
	.documentation-page td > .user,
	.documentation-page td > time {
		white-space: nowrap;
	}
	
	input[type="checkbox"] {
		transform: scale(1.5);
		margin-right: 0.6em;
		vertical-align: middle;
	}
	
	.documentation-page p {
		margin-top: 0.5em;
		margin-bottom: 0.5em;
	}
	
	.documentation-page .image {
		border: none;
		margin: 1.5em 0;
		padding: 0;
		border-radius: 0;
		text-align: center;
	}
	
	.code,
	code {
		background: rgba(135, 131, 120, 0.15);
		border-radius: 3px;
		padding: 0.2em 0.4em;
		border-radius: 3px;
		font-size: 85%;
		tab-size: 2;
	}
	
	.documentation-page code {
		color: #eb5757;
	}
	
	.documentation-page .code {
		padding: 1.5em 1em;
	}
	
	.code-wrap {
		white-space: pre-wrap;
		word-break: break-all;
	}
	
	.code > code {
		background: none;
		padding: 0;
		font-size: 100%;
		color: inherit;
	}
	
	.documentation-page 	blockquote {
		font-size: 1.25em;
		margin: 1em 0;
		padding-left: 1em;
		border-left: 3px solid rgb(55, 53, 47);
	}
	
	.bookmark {
		text-decoration: none;
		max-height: 8em;
		padding: 0;
		display: flex;
		width: 100%;
		align-items: stretch;
	}
	
	.bookmark-title {
		font-size: 0.85em;
		overflow: hidden;
		text-overflow: ellipsis;
		height: 1.75em;
		white-space: nowrap;
	}
	
	.bookmark-text {
		display: flex;
		flex-direction: column;
	}
	
	.bookmark-info {
		flex: 4 1 180px;
		padding: 12px 14px 14px;
		display: flex;
		flex-direction: column;
		justify-content: space-between;
	}
	
	.bookmark-image {
		width: 33%;
		flex: 1 1 180px;
		display: block;
		position: relative;
		object-fit: cover;
		border-radius: 1px;
	}
	
	.bookmark-description {
		color: rgba(55, 53, 47, 0.6);
		font-size: 0.75em;
		overflow: hidden;
		max-height: 4.5em;
		word-break: break-word;
	}
	
	.bookmark-href {
		font-size: 0.75em;
		margin-top: 0.25em;
	}
	
	.sans { font-family: ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol"; }
	.code { font-family: "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace; }
	.serif { font-family: Lyon-Text, Georgia, ui-serif, serif; }
	.mono { font-family: iawriter-mono, Nitti, Menlo, Courier, monospace; }
	.pdf .sans { font-family: Inter, ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol", 'Twemoji', 'Noto Color Emoji', 'Noto Sans CJK JP'; }
	.pdf:lang(zh-CN) .sans { font-family: Inter, ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol", 'Twemoji', 'Noto Color Emoji', 'Noto Sans CJK SC'; }
	.pdf:lang(zh-TW) .sans { font-family: Inter, ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol", 'Twemoji', 'Noto Color Emoji', 'Noto Sans CJK TC'; }
	.pdf:lang(ko-KR) .sans { font-family: Inter, ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol", 'Twemoji', 'Noto Color Emoji', 'Noto Sans CJK KR'; }
	.pdf .code { font-family: Source Code Pro, "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK JP'; }
	.pdf:lang(zh-CN) .code { font-family: Source Code Pro, "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK SC'; }
	.pdf:lang(zh-TW) .code { font-family: Source Code Pro, "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK TC'; }
	.pdf:lang(ko-KR) .code { font-family: Source Code Pro, "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK KR'; }
	.pdf .serif { font-family: PT Serif, Lyon-Text, Georgia, ui-serif, serif, 'Twemoji', 'Noto Color Emoji', 'Noto Serif CJK JP'; }
	.pdf:lang(zh-CN) .serif { font-family: PT Serif, Lyon-Text, Georgia, ui-serif, serif, 'Twemoji', 'Noto Color Emoji', 'Noto Serif CJK SC'; }
	.pdf:lang(zh-TW) .serif { font-family: PT Serif, Lyon-Text, Georgia, ui-serif, serif, 'Twemoji', 'Noto Color Emoji', 'Noto Serif CJK TC'; }
	.pdf:lang(ko-KR) .serif { font-family: PT Serif, Lyon-Text, Georgia, ui-serif, serif, 'Twemoji', 'Noto Color Emoji', 'Noto Serif CJK KR'; }
	.pdf .mono { font-family: PT Mono, iawriter-mono, Nitti, Menlo, Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK JP'; }
	.pdf:lang(zh-CN) .mono { font-family: PT Mono, iawriter-mono, Nitti, Menlo, Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK SC'; }
	.pdf:lang(zh-TW) .mono { font-family: PT Mono, iawriter-mono, Nitti, Menlo, Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK TC'; }
	.pdf:lang(ko-KR) .mono { font-family: PT Mono, iawriter-mono, Nitti, Menlo, Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK KR'; }
	.highlight-default {
		color: rgba(55, 53, 47, 1);
	}
	.highlight-gray {
		color: rgba(120, 119, 116, 1);
		fill: rgba(120, 119, 116, 1);
	}
	.highlight-brown {
		color: rgba(159, 107, 83, 1);
		fill: rgba(159, 107, 83, 1);
	}
	.highlight-orange {
		color: rgba(217, 115, 13, 1);
		fill: rgba(217, 115, 13, 1);
	}
	.highlight-yellow {
		color: rgba(203, 145, 47, 1);
		fill: rgba(203, 145, 47, 1);
	}
	.highlight-teal {
		color: rgba(68, 131, 97, 1);
		fill: rgba(68, 131, 97, 1);
	}
	.highlight-blue {
		color: rgba(51, 126, 169, 1);
		fill: rgba(51, 126, 169, 1);
	}
	.highlight-purple {
		color: rgba(144, 101, 176, 1);
		fill: rgba(144, 101, 176, 1);
	}
	.highlight-pink {
		color: rgba(193, 76, 138, 1);
		fill: rgba(193, 76, 138, 1);
	}
	.highlight-red {
		color: rgba(212, 76, 71, 1);
		fill: rgba(212, 76, 71, 1);
	}
	.highlight-gray_background {
		background: rgba(241, 241, 239, 1);
	}
	.highlight-brown_background {
		background: rgba(244, 238, 238, 1);
	}
	.highlight-orange_background {
		background: rgba(251, 236, 221, 1);
	}
	.highlight-yellow_background {
		background: rgba(251, 243, 219, 1);
	}
	.highlight-teal_background {
		background: rgba(237, 243, 236, 1);
	}
	.highlight-blue_background {
		background: rgba(231, 243, 248, 1);
	}
	.highlight-purple_background {
		background: rgba(244, 240, 247, 0.8);
	}
	.highlight-pink_background {
		background: rgba(249, 238, 243, 0.8);
	}
	.highlight-red_background {
		background: rgba(253, 235, 236, 1);
	}
	.block-color-default {
		color: inherit;
		fill: inherit;
	}
	.block-color-gray {
		color: rgba(120, 119, 116, 1);
		fill: rgba(120, 119, 116, 1);
	}
	.block-color-brown {
		color: rgba(159, 107, 83, 1);
		fill: rgba(159, 107, 83, 1);
	}
	.block-color-orange {
		color: rgba(217, 115, 13, 1);
		fill: rgba(217, 115, 13, 1);
	}
	.block-color-yellow {
		color: rgba(203, 145, 47, 1);
		fill: rgba(203, 145, 47, 1);
	}
	.block-color-teal {
		color: rgba(68, 131, 97, 1);
		fill: rgba(68, 131, 97, 1);
	}
	.block-color-blue {
		color: rgba(51, 126, 169, 1);
		fill: rgba(51, 126, 169, 1);
	}
	.block-color-purple {
		color: rgba(144, 101, 176, 1);
		fill: rgba(144, 101, 176, 1);
	}
	.block-color-pink {
		color: rgba(193, 76, 138, 1);
		fill: rgba(193, 76, 138, 1);
	}
	.block-color-red {
		color: rgba(212, 76, 71, 1);
		fill: rgba(212, 76, 71, 1);
	}
	.block-color-gray_background {
		background: rgba(241, 241, 239, 1);
	}
	.block-color-brown_background {
		background: rgba(244, 238, 238, 1);
	}
	.block-color-orange_background {
		background: rgba(251, 236, 221, 1);
	}
	.block-color-yellow_background {
		background: rgba(251, 243, 219, 1);
	}
	.block-color-teal_background {
		background: rgba(237, 243, 236, 1);
	}
	.block-color-blue_background {
		background: rgba(231, 243, 248, 1);
	}
	.block-color-purple_background {
		background: rgba(244, 240, 247, 0.8);
	}
	.block-color-pink_background {
		background: rgba(249, 238, 243, 0.8);
	}
	.block-color-red_background {
		background: rgba(253, 235, 236, 1);
	}
	.select-value-color-pink { background-color: rgba(245, 224, 233, 1); }
	.select-value-color-purple { background-color: rgba(232, 222, 238, 1); }
	.select-value-color-green { background-color: rgba(219, 237, 219, 1); }
	.select-value-color-gray { background-color: rgba(227, 226, 224, 1); }
	.select-value-color-opaquegray { background-color: rgba(255, 255, 255, 0.0375); }
	.select-value-color-orange { background-color: rgba(250, 222, 201, 1); }
	.select-value-color-brown { background-color: rgba(238, 224, 218, 1); }
	.select-value-color-red { background-color: rgba(255, 226, 221, 1); }
	.select-value-color-yellow { background-color: rgba(253, 236, 200, 1); }
	.select-value-color-blue { background-color: rgba(211, 229, 239, 1); }
	
	.checkbox {
		display: inline-flex;
		vertical-align: text-bottom;
		width: 16;
		height: 16;
		background-size: 16px;
		margin-left: 2px;
		margin-right: 5px;
	}
	
	.checkbox-on {
		background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2216%22%20height%3D%2216%22%20viewBox%3D%220%200%2016%2016%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%3Crect%20width%3D%2216%22%20height%3D%2216%22%20fill%3D%22%2358A9D7%22%2F%3E%0A%3Cpath%20d%3D%22M6.71429%2012.2852L14%204.9995L12.7143%203.71436L6.71429%209.71378L3.28571%206.2831L2%207.57092L6.71429%2012.2852Z%22%20fill%3D%22white%22%2F%3E%0A%3C%2Fsvg%3E");
	}
	
	.checkbox-off {
		background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2216%22%20height%3D%2216%22%20viewBox%3D%220%200%2016%2016%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%3Crect%20x%3D%220.75%22%20y%3D%220.75%22%20width%3D%2214.5%22%20height%3D%2214.5%22%20fill%3D%22white%22%20stroke%3D%22%2336352F%22%20stroke-width%3D%221.5%22%2F%3E%0A%3C%2Fsvg%3E");
	}
</style>
<section>
<div class="container">
<article id="38cd0662-f48b-4494-a412-ba09a547214f" class="page sans  documentation-page">
			<header style="margin-top: 25px">
				<div class="page-header-icon undefined">
				</div>
				<h1 class="page-title">🌸 Bloom AI Documentation</h1>
			</header>
			<div class="page-body">
				<p id="e692d037-fa44-44c3-9bfa-830bdb202987" class="block-color-gray">Below you’ll find the Bloom AI API
					documentation</p>
				<p id="3eec8838-cd18-4efd-a694-ed08542f2221" class="">
				</p>
				<figure class="block-color-yellow_background callout" style="display:flex"
					id="d95d382d-c274-4e7f-be54-f466642d9fd3">
					<div style="font-size:1.5em,margin-bottom:0.5rem;"><span class="icon">🌸</span></div>
					<div style="width:100%">Welcome to Bloom AI, we’re on a mission to make state-of-the-art natural language processing accessible to everyone in a safe and private environment.<p>Email: info@bloomai.eu</p>
					</div>
				</figure>
				<h2 id="c1c06a5b-f98e-4c0b-8804-844c641da159" class="">Python code to create a file</h2>
				<pre id="a0cd4e08-13d5-4d7b-8168-dd9ef3758070" class="code"><code>import requests
import json

url = &#x27;https://www.bloomai.eu/v1&#x27;

data = {
    &quot;operation&quot;: &quot;create_file&quot;,
    &quot;file_name&quot;: &quot;example file name&quot;,
    &quot;training_data&quot; : [{&quot;prompt&quot;:&quot;prompt example&quot;, &quot;completion&quot;:&quot;completion example&quot;},
                       {&quot;prompt&quot;:&quot;prompt example&quot;, &quot;completion&quot;:&quot;completion example&quot;},
                       {&quot;prompt&quot;:&quot;prompt example&quot;, &quot;completion&quot;:&quot;completion example&quot;}],
    &quot;api_key&quot;  : &quot;API key&quot;,
    &quot;user_id&quot;  : &quot;email address&quot;,
}

response = requests.post(url,  data=json.dumps(data))</code></pre>
				<hr id="be888474-9a2f-44c5-9252-dfdee5f08f70" />
				<p id="f1ac683e-d9a6-42e3-b7a3-6f78e4a3fef8" class="">Expected output</p>
				<pre id="09c5c313-0835-495f-90cf-c2d19ff607d6"
					class="code"><code>{&quot;status&quot;: 200, &quot;file_id&quot;: &quot;file-************************&quot;}</code></pre>
				<h3 id="9fb6b6b6-2d42-49ac-a2ba-7406ae9718bc" class="">Python code to create files larger than 5MB in
					size 📑</h3>
				<pre id="3e3c0a4e-a68e-43b6-ba96-9538273b457d" class="code"><code>import requests
import json

url = &#x27;https://www.bloomai.eu/v1&#x27;

data = {
    &quot;operation&quot;: &quot;upload_link&quot;,
    &quot;file_name&quot;: &quot;example file name&quot;,
    &quot;api_key&quot;  : &quot;API key&quot;,
    &quot;user_id&quot;  : &quot;email address&quot;,
}

response = requests.post(url,  data=json.dumps(data))

response = requests.put(response.json()[&quot;url&quot;], data=open(&quot;path to jsonl&quot;,&#x27;rb&#x27;).read())

url = &#x27;https://www.bloomai.eu/v1&#x27;

data = {
    &quot;operation&quot;: &quot;create_file_v1&quot;,
    &quot;file_name&quot;: &quot;example file name&quot;,
    &quot;api_key&quot;  : &quot;API key&quot;,
    &quot;user_id&quot;  : &quot;email address&quot;,
}

response = requests.post(url,  data=json.dumps(data))</code></pre>
				<p id="f35c7487-22f7-4f1e-b20b-d7a28025dff2" class="">Expected output</p>
				<pre id="5b855163-863b-4c99-b5c7-6a947c19bf88"
					class="code"><code>{&quot;status&quot;: 200, &quot;file_id&quot;: &quot;file-************************&quot;}</code></pre>
				<h3 id="3a5bedf2-caef-4863-932c-d41f95550b71" class="">Python code to list your files 🗃️</h3>
				<pre id="a17e2019-b7df-41b2-94ea-e80f8208dbc1" class="code"><code>import requests
import json

url = &#x27;https://www.bloomai.eu/v1&#x27;

data = {
    &quot;operation&quot;: &quot;list_files&quot;,
    &quot;file_name&quot;: &quot;example file name&quot;,
    &quot;api_key&quot;  : &quot;API key&quot;,
    &quot;user_id&quot;  : &quot;email address&quot;,
}

response = requests.post(url,  data=json.dumps(data))</code></pre>
				<p id="676a7e5f-f2fd-45e4-a8d7-47ad6ba64231" class="">Expected output</p>
				<pre id="8693068b-41e8-4050-be12-a39a12199304" class="code"><code>{&#x27;status&#x27;: 200,
 &#x27;Files&#x27;: 
		[{ &#x27;name&#x27;: &#x27;example file name&#x27;,
		   &#x27;used_in_fine_tuning&#x27;: False,
       &#x27;id&#x27;: &#x27;file-***********************&#x27;},
     { &#x27;name&#x27;: &#x27;example file name&#x27;,
		   &#x27;used_in_fine_tuning&#x27;: False,
       &#x27;id&#x27;: &#x27;file-***********************&#x27;}
		]
}</code></pre>
				<figure class="block-color-yellow_background callout" style="display:flex"
					id="453ecaa1-b5eb-4429-b942-413b0e4a2546">
					<div style="font-size:1.5em,margin-bottom:0.5rem;"><span class="icon">💡</span></div>
					<div style="width:100%">Note that the “list_files” is rated at 101 tokenize calls.</div>
				</figure>
				<h3 id="a187a1a3-6593-4498-942e-6fe6c30cf5c8" class="">Python code to delete a file 🗑️</h3>
				<pre id="cdcd08ad-504d-44e4-a209-fa79752f6d5d" class="code"><code>import requests
import json

url = &#x27;https://www.bloomai.eu/v1&#x27;

data = {
    &quot;operation&quot;: &quot;delete_file&quot;,
    &quot;file_name&quot;: &quot;example file name&quot;,
		&quot;file_id&quot;  : &quot;file-*****************************&quot;,
    &quot;api_key&quot;  : &quot;API key&quot;,
    &quot;user_id&quot;  : &quot;email address&quot;,
}

response = requests.post(url,  data=json.dumps(data))</code></pre>
				<p id="ff56874b-01a8-47ef-b071-12609da6f7bf" class="">Expected output</p>
				<pre id="d0d5fb23-97d1-4194-804b-7879b2130efa"
					class="code"><code>{&quot;status&quot;: 200, &quot;response&quot;: &quot;File deleted successfully&quot;}</code></pre>
				<h3 id="44f64f1e-24fc-4eb1-bc7d-c6964f6d7168" class="">Python code to list your models 🗃️</h3>
				<pre id="269f3beb-75bc-4ff0-b28f-05ac548b0616" class="code"><code>import requests
import json

url = &#x27;https://www.bloomai.eu/v1&#x27;

data = {
    &quot;operation&quot;: &quot;list_models&quot;,
    &quot;api_key&quot;  : &quot;API key&quot;,
    &quot;user_id&quot;  : &quot;email address&quot;,
}

response = requests.post(url,  data=json.dumps(data))</code></pre>
				<p id="cd7021c0-b984-4211-84f8-498b07a0707a" class="">Expected output</p>
				<pre id="703751ed-1411-4f74-baec-98c1e224573e" class="code"><code>{&#x27;status&#x27;: 200,
 &#x27;Models&#x27;: [{&#x27;model_id&#x27;: &#x27;ft-**************&#x27;,
   &#x27;model_status&#x27;: &#x27;Succeeded&#x27;,
   &#x27;model_alias&#x27;: &#x27;Loving Cactus&#x27;,
   &#x27;used_file&#x27;: &#x27;file name&#x27;},
  {&#x27;model_id&#x27;: &#x27;ft-**************&#x27;,
   &#x27;model_status&#x27;: &#x27;Cancelled&#x27;,
   &#x27;model_alias&#x27;: &#x27;fUser given name _ 1&#x27;,
   &#x27;used_file&#x27;: &#x27;file name&#x27;},
  {&#x27;model_id&#x27;: &#x27;ft-**************&#x27;,
   &#x27;model_status&#x27;: &#x27;Cancelled&#x27;,
   &#x27;model_alias&#x27;: &#x27;User given name&#x27;,
   &#x27;used_file&#x27;: &#x27;file name&#x27;}]}</code></pre>
				<figure class="block-color-yellow_background callout" style="display:flex"
					id="781dbe04-1658-4dde-9539-ccdaaf585d2a">
					<div style="font-size:1.5em,margin-bottom:0.5rem;"><span class="icon">💡</span></div>
					<div style="width:100%">Note that the “list_models” is rated at 10 tokenize calls.</div>
				</figure>
				<h3 id="224a97a9-4ca7-4663-ae77-1556681aaa97" class="">Python code to retrieve your usage 📊</h3>
				<pre id="8997967e-3c64-4684-9db4-956bf3295644" class="code"><code>
import requests
import json

url = &#x27;https://www.bloomai.eu/v1&#x27;

data = {
    &quot;operation&quot;: &quot;retrieve_usage&quot;,
		&quot;api_key&quot;  : &quot;API key&quot;,
    &quot;user_id&quot;  : &quot;email address&quot;,
}

response = requests.post(url,  data=json.dumps(data))</code></pre>
				<p id="949ac14e-6ba4-407a-a79c-99c192c7566b" class="">Expected output</p>
				<pre id="6983e63b-1471-4447-b0bf-429b4f6d312b" class="code"><code>{&#x27;call_bloom&#x27; : 2000,
 &#x27;fine_tune&#x27;  : 1,
 &#x27;list_files&#x27; : 50,
 &#x27;tokenize&#x27;   : 3000,
 &#x27;list_models&#x27;: 20}</code></pre>
				<h3 id="57cb13b6-26e2-4f87-8c08-a9c1ef39a9b0" class="">Python code to tokenize text ✂️</h3>
				<pre id="f5d1e8fe-d48c-4493-956a-e9f532ef5cf7" class="code"><code>import requests
import json

url = &#x27;https://www.bloomai.eu/v1/tokenize&#x27;

data = {
    &quot;operation&quot;: &quot;tokenize&quot;,
    &quot;text&quot;     : &quot;text you need tokenized&quot;,
    &quot;unique_id&quot;: &quot;unique id&quot;,
    &quot;api_key&quot;  : &quot;API key&quot;,
    &quot;user_id&quot;  : &quot;email address&quot;,

}

response = requests.post(url,  data=json.dumps(data))</code></pre>
				<p id="aba01f47-277e-41bb-a5b7-7165d947415a" class="">Expected output</p>
				<pre id="201803d4-089b-4572-b81a-1970ed4ef1c7" class="code"><code>{&#x27;status&#x27;: 200,
 &#x27;response&#x27;: {&#x27;data&#x27;: {&#x27;tokens&#x27;: [&#x27;example&#x27;, &#x27; text&#x27;, &#x27; to&#x27;, &#x27; token&#x27;, &#x27;ize&#x27;],
   &#x27;nr_tokens&#x27;: 5}},
 &#x27;nr_calls&#x27;: 1}</code></pre>
				<figure class="block-color-yellow_background callout" style="display:flex"
					id="7aefb6d3-1479-471f-b535-559a79d12d9c">
					<div style="font-size:1.5em,margin-bottom:0.5rem;"><span class="icon">💡</span></div>
					<div style="width:100%">Note that the “tokenize” call payload call is limited to 2 MB in size but that is by far beyond the model’s memory of 2000 tokens.</div>
				</figure>
				<h3 id="52ea0ef7-dffd-451e-a4f3-811dfee3281b" class="">Python code to retrieve the list of unique IDs 📇
				</h3>
				<pre id="ec76c625-c653-4131-bc33-7f1cc333752a" class="code"><code>import requests
import json

url = &#x27;https://www.bloomai.eu/v1/tokenize&#x27;

data = {
    &quot;operation&quot;: &quot;list_unique_id&quot;,
    &quot;limit&quot;    : 10,
		&quot;api_key&quot;  : &quot;API key&quot;,
    &quot;user_id&quot;  : &quot;email address&quot;,

}

response = requests.post(url,  data=json.dumps(data))

response.json()</code></pre>
				<p id="05aa8a79-d8c7-46f7-97b8-06a03a4162f9" class="">Expected output</p>
				<pre id="5419972b-6938-4efc-b042-77dfca05d9ea" class="code"><code>{&#x27;status&#x27;: 200,
 &#x27;response&#x27;: {&#x27;Items&#x27;: [
   {&#x27;createdAt&#x27;: &#x27;2023-01-30T18:14:01.251Z&#x27;, &#x27;username&#x27;: &#x27;username&#x27;},
   {&#x27;createdAt&#x27;: &#x27;2023-01-30T18:20:20.188Z&#x27;, &#x27;username&#x27;: &#x27;username&#x27;},
   {&#x27;createdAt&#x27;: &#x27;2023-01-30T18:44:42.825Z&#x27;, &#x27;username&#x27;: &#x27;username&#x27;}],
  &#x27;Count&#x27;: 3,
  &#x27;ScannedCount&#x27;: 3},
 &#x27;nr_calls&#x27;: 10}</code></pre>
				<figure class="block-color-yellow_background callout" style="display:flex"
					id="4ad43a23-370c-4829-8bd2-39d39c0ad79a">
					<div style="font-size:1.5em,margin-bottom:0.5rem;"><span class="icon">💡</span></div>
					<div style="width:100%">Note that the “list_unique_id” call is rated at 10 tokenize calls.</div>
				</figure>
				<figure class="block-color-yellow_background callout" style="display:flex"
					id="4358832a-0f86-4f8a-862c-b35460635a3e">
					<div style="font-size:1.5em,margin-bottom:0.5rem;"><span class="icon">💡</span></div>
					<div style="width:100%">Note that the “limit” parameter in the “list_unique_id” call is optional and defaults to 10</div>
				</figure>
				<h3 id="2350b44c-222a-490d-912e-cf81a4bff52b" class="">Python code to retrieve usage per unique ID 📊
				</h3>
				<pre id="b398e6e0-a54a-4db1-aeff-52f37db96e5a" class="code"><code>import requests
import json

url = &#x27;https://www.bloomai.eu/v1/tokenize&#x27;

data = {
    &quot;operation&quot;: &quot;usage_per_id&quot;,
    &quot;year&quot;     : &quot;2022&quot;,
    &quot;month&quot;    : &quot;10&quot;,
    &quot;unique_id&quot;: &quot;unique ID&quot;,
		&quot;api_key&quot;  : &quot;API key&quot;,
    &quot;user_id&quot;  : &quot;email address&quot;,

}

response = requests.post(url,  data=json.dumps(data))</code></pre>
				<p id="61ab839f-e10d-449e-8e3a-2f0ad3eab6ba" class="">Expected output</p>
				<pre id="220f6bff-c6db-475c-a64d-89dacecb8c69" class="code"><code>{&#x27;status&#x27;: 200,
 &#x27;response&#x27;: {&#x27;totalRequest&#x27;: 11,
  &#x27;Items&#x27;: [{&#x27;_id&#x27;: &#x27;1f45c1ab-f7f5-4c2d-8568-8b1e5f1f8b94&#x27;,
    &#x27;createdAt&#x27;: &#x27;2022-12-24&#x27;,
    &#x27;username&#x27;: &#x27;unique ID&#x27;,
    &#x27;no_of_requests&#x27;: 9},
   {&#x27;_id&#x27;: &#x27;899e5db2-8428-47b1-9511-589af0269cf9&#x27;,
    &#x27;createdAt&#x27;: &#x27;2022-12-25&#x27;,
    &#x27;username&#x27;: &#x27;unique ID&#x27;,
    &#x27;no_of_requests&#x27;: 2}],
  &#x27;Count&#x27;: 2,
  &#x27;ScannedCount&#x27;: 2},
 &#x27;nr_calls&#x27;: 10}</code></pre>
				<figure class="block-color-yellow_background callout" style="display:flex"
					id="61ef89dc-ce2f-4aef-8783-452d03f9a055">
					<div style="font-size:1.5em,margin-bottom:0.5rem;"><span class="icon">💡</span></div>
					<div style="width:100%">Note that the “usage_per_id” call is rated at 10 tokenize calls.</div>
				</figure>
				<h1 id="cff9cd7d-5412-4dfb-b347-f28cc7dd04ba" class="">🚀 Fine-tune Bloom AI’s base model</h1>
				<h3 id="07db4b23-3cbb-479d-92a7-6d8d1b04d532" class="">Python code to start fine-tuning 🚩</h3>
				<p id="49f341be-d22a-49c6-a2d7-febe47069e79" class="">To fine-tune Bloom AI’s base model you will need
					both the file ID as well as the file name which can be retrieved using the list_files endpoint</p>
				<pre id="fa94ca6b-f885-43c8-8458-2d4768e2c7f3" class="code"><code>import requests
import json

url = &#x27;https://www.bloomai.eu/v1&#x27;

data = {
    &quot;operation&quot; : &quot;fine_tune&quot;,
    &quot;file_name&quot; : &quot;file name&quot;,
    &quot;file_id&quot;   : &quot;file-*****************&quot;,
		&quot;model_name&quot;: &quot;model name&quot;,
		&quot;api_key&quot;   : &quot;API key&quot;,
    &quot;user_id&quot;   : &quot;email address&quot;,
}

response = requests.post(url,  data=json.dumps(data))</code></pre>
				<p id="3b1875af-3d46-4b3a-8827-031545de9c44" class="">Expected output</p>
				<pre id="5b76f851-e9d2-4105-8078-c3edc34c18f5"
					class="code"><code>{&quot;status&quot;: 200, &quot;response&quot;: &quot;Fine tuning started&quot;, &quot;model name&quot;: &quot;given model name&quot;}</code></pre>
				<figure class="block-color-yellow_background callout" style="display:flex"
					id="e5cf334e-ad4a-43c6-8628-e236021ae583">
					<div style="font-size:1.5em,margin-bottom:0.5rem;"><span class="icon">💡</span></div>
					<div style="width:100%">Note that the “model_name” parameter is optional and we will generate a unique name for your model if no name is given.</div>
				</figure>
				<h3 id="f2f2d93b-0a86-4b11-b01e-8df1b32243bf" class="">Python code to cancel fine-tuning 🛑</h3>
				<pre id="7a170d27-1f03-4b08-b01b-ce0f3ae50e69" class="code"><code>import requests
import json

url = &#x27;https://www.bloomai.eu/v1&#x27;

data = {
    &quot;operation&quot;: &quot;cancel_finetune&quot;,
		&quot;model_name&quot;: &quot;model name&quot;,
		&quot;api_key&quot;   : &quot;API key&quot;,
    &quot;user_id&quot;   : &quot;email address&quot;,
}

response = requests.post(url,  data=json.dumps(data))</code></pre>
				<p id="38335d76-9b63-4702-a2a2-7f2df88480cf" class="">Expected output</p>
				<pre id="f28313c0-1169-422f-a629-a4511d90b787"
					class="code"><code>{&quot;status&quot;: 200, &quot;response&quot;: &quot;Fine tuning cancelled&quot;, &quot;model name&quot;: &quot;given model name&quot;}</code></pre>
				<p id="b2ae6b0c-0edd-45f9-a0be-c20a0a87cd36" class="">
				</p>
				<h3 id="7cef1f4f-c8e6-48a4-91dd-959de4beb669" class="">Python code to call your fine-tuned model 🎉</h3>
				<pre id="b9c564b4-d4f8-4469-b90f-74e7f39b5269" class="code"><code>import requests
import json

url = &#x27;https://www.bloomai.eu/v1&#x27;

data = {
    &quot;operation&quot;        : &quot;call_bloom&quot;,
    &quot;model_name&quot;       : &quot;model name&quot;,
    &quot;input&quot;            : &quot;your prompt:&quot;,
    &quot;randomness&quot;       : 0.3,
    &quot;maximum_length&quot;   : 100,
    &quot;nucleus_sampling&quot; : 1,
    &quot;frequency_penalty&quot;: 0,
    &quot;presence_penalty&quot; : 0,
    &quot;stop_sequence&quot;    : [&quot;&lt;END&gt;&quot;],
		&quot;api_key&quot;          : &quot;API key&quot;,
    &quot;user_id&quot;          : &quot;email address&quot;,
}

response = requests.post(url,  data=json.dumps(data))</code></pre>
				<p id="dae350b1-9d78-43b3-aa18-a4ec2aa674cf" class="">Expected output</p>
				<pre id="02b88618-b411-43f3-ac07-f5f50de2afdb"
					class="code"><code>{&quot;status&quot;: 200, &quot;response&quot;: &quot;The lead actor in The Rocky movies is Sylvester Stallone.&quot;, &quot;nr_calls&quot;: 1}</code></pre>
				<p id="278c90b1-7000-4441-9cf2-339274e488f4" class="">
				</p>
				<figure class="block-color-yellow_background callout" style="display:flex"
					id="a599e4de-a4be-43b5-89cd-d4212acb0e12">
					<div style="font-size:1.5em,margin-bottom:0.5rem;"><span class="icon">💡</span></div>
					<div style="width:100%">Note the following optional parameters and their default values randomnes defaults to 0.3 maximum_length defaults to 100 nucleus_sampling” defaults to 1 frequency_penalty defaults to 0 presence_penalty defaults to 0 stop_sequence defaults to None</div>
				</figure>
				<p id="c94993a1-ae56-4e74-8a95-6368b31a2d2b" class="">
				</p>
			</div>
		</article>
</div>
</section>
@endsection