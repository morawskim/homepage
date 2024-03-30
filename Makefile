.PHONY: watch

watch:
	npx tailwindcss -i ./style.css -o ./public/output.css --watch
