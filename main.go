package main

import (
	"bytes"
	_ "embed"
	"fmt"
	"html"
	"os"
	"slices"
	"strings"

	"github.com/richardwilkes/toolbox/v2/xos"
	"github.com/richardwilkes/toolbox/v2/xstrings"
)

//go:embed "page_references.txt"
var pageRefText string

type pageRef struct {
	code string
	name string
}

func main() {
	keys := make(map[string]bool)
	descs := make(map[string]bool)
	var list []pageRef
	for _, line := range strings.Split(pageRefText, "\n") {
		if line == "" {
			continue
		}
		parts := strings.Split(line, "\t")
		if len(parts) != 2 {
			xos.ExitWithMsg("page_references.txt isn't formatted properly. Must be code<tab>description.")
		}
		if keys[parts[0]] || descs[parts[1]] {
			xos.ExitWithMsg("duplicate entry: " + line)
		}
		keys[parts[0]] = true
		descs[parts[1]] = true
		list = append(list, pageRef{
			code: parts[0],
			name: parts[1],
		})
	}
	slices.SortFunc(list, func(a, b pageRef) int {
		return xstrings.NaturalCmp(a.code, b.code, true)
	})

	var web bytes.Buffer
	var code bytes.Buffer
	var txt bytes.Buffer
	web.WriteString(webHeader)
	for _, one := range list {
		fmt.Fprintf(&code, "%q: %q,\n", one.code, one.name)
		fmt.Fprintf(&web, `					<tr>
						<td>%s</td>
						<td>%s</td>
					</tr>
`, one.code, html.EscapeString(one.name))
		fmt.Fprintf(&txt, "%s\t%s\n", one.code, one.name)
	}
	web.WriteString(webFooter)
	xos.ExitIfErr(os.WriteFile("zz_code.txt", code.Bytes(), 0o644))
	xos.ExitIfErr(os.WriteFile("page_references.html", web.Bytes(), 0o644))
	xos.ExitIfErr(os.WriteFile("page_references.txt", txt.Bytes(), 0o644))
}

var (
	webHeader = `<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GURPS Character Sheet - Page References</title>
	<meta name="description" content="A WYSIWYG character sheet for GURPS Fourth Edition">
	<meta name="keywords" content="GURPS Character Sheet roleplaying games" />
	<meta name="norton-safeweb-site-verification"
		content="fnn0dveu85-ceabrbo2s7k1kw54q88sqmlvbun2sg86r82l9l01bxz6qlbq6ptnqojpmwzqs8v2viv1jkxhi3jo5ndv931j15xz3j49uup5blqxahylgkqquk-hg5uf9" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="images/app_icon.svg" type="image/svg+xml"/>
</head>
<body>
	<header>
		<div id="banner">
			<div id="logo"><a href="index.html"><img src="images/app_icon.svg" alt="GURPS Character Sheet"></a></div>
			<div id="banner_right">
				<div id="banner_title">GURPS Character Sheet</div>
				<div class="banner_desc">GURPS Character Sheet (GCS) is a standalone, interactive, character sheet editor that
					allows you to build characters for the <a href="http://www.sjgames.com/gurps">GURPS Fourth Edition</a>
					roleplaying game.</div>
			</div>
		</div>
	</header>
	<section id="pageContent">
		<main role="main">
			<article>
				<h2>Page References</h2>
				<p>These are the page reference abbreviations that should be used in the data files as of March 1, 2022:</p>
				<table class="page_refs">
`
	webFooter = `				</table>
			</article>
		</main>
		<div id="aside">
			<div>
				<h3>GCS</h3>
				<ul>
					<li><a href="faq.html">FAQ</a></li>
					<li><a href="https://github.com/richardwilkes/gcs/wiki">User Guide</a></li>
					<li><a href="https://github.com/richardwilkes/gcs/releases">Releases</a></li>
					<li><a href="https://github.com/richardwilkes/gcs/blob/master/README.md">Development Setup</a></li>
					<li><a href="https://github.com/richardwilkes/gcs">GitHub Repository</a></li>
					<li><a href="https://github.com/richardwilkes/gcs/issues">Issue Tracker</a>
					<li><a href="https://groups.io/g/gcs">Mailing List</a></li>
					<li><a href="https://discord.gg/MKhuDPPagY">Discord Server</a></li>
				</ul>
			</div>
			<div>
				<h3>GCS Master Library</h3>
				<ul>
					<li><a href="https://github.com/richardwilkes/gcs_master_library/releases">Releases</a></li>
					<li><a href="https://github.com/richardwilkes/gcs_master_library">GitHub Repository</a></li>
					<li><a href="https://github.com/richardwilkes/gcs_master_library/issues">Issue Tracker</a>
					<li><a href="page_references.html">Page Reference List</a></li>
					<li><a href="output_templates.html">Output Template Docs</a></li>
				</ul>
			</div>
		</div>
	</section>
	<footer>
		<p class="copyright">Copyright &copy;1998-2026 by <a href="mailto:wilkes@me.com">Richard A. Wilkes</a>. All rights
			reserved worldwide.</p>
		<p class="license">GURPS Character Sheet is licensed under the <a href="license.html">Mozilla Public License,
				version 2.0</a>.</p>
		<p class="disclaimer">GURPS is a trademark of Steve Jackson Games, and its rules and art are copyrighted by Steve
			Jackson Games. All rights are reserved by Steve Jackson Games.<br> This game aid is the original creation of
			Richard A. Wilkes and is released for free distribution, and not for resale, under the permissions granted in the
			<a href="http://www.sjgames.com/general/online_policy.html">Steve Jackson Games Online Policy</a>.</p>
	</footer>
</body>
</html>`
)
