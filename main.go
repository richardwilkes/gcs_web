package main

import (
	_ "embed"
	"fmt"
	"html"
	"os"
	"strings"
)

//go:embed "page_references.txt"
var pageRefText string

func main() {
	keys := make(map[string]bool)
	descs := make(map[string]bool)
	for _, line := range strings.Split(pageRefText, "\n") {
		parts := strings.Split(line, "\t")
		if len(parts) != 2 {
			fmt.Fprintf(os.Stderr, "page_references.txt isn't formatted properly. Must be code<tab>description.")
			os.Exit(1)
		}
		if keys[parts[0]] || descs[parts[1]] {
			fmt.Fprintf(os.Stderr, "duplicate entry: "+line)
			os.Exit(1)
		}
		keys[parts[0]] = true
		descs[parts[1]] = true
		fmt.Printf(`                <tr>
                    <td>%s</td>
                    <td>%s</td>
                </tr>
`, parts[0], html.EscapeString(parts[1]))
	}
}
