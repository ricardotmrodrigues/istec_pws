# minha-api: Notes

First REST service in Yii2 (PWS / ISTEC).

## macOS environment
- PHP and Composer installed with Homebrew (`brew install php composer`)
- Check: `php -v` and `composer -V`
- Project path: `~/Projects/ISTEC/PWS/istec_pws/minha-api`

## Run the server
    cd ~/Projects/ISTEC/PWS/istec_pws/minha-api
    php yii serve

- Open http://localhost:8080
- Stop with `Ctrl+C`
- Port in use? `php yii serve --port=8081`

## Postman
- Postman Web + Postman Desktop Agent (menu bar icon), or the Postman Mac app
- In Postman Web, select "Desktop Agent" or "Auto-select" to reach localhost

## Gotchas
- Run Terminal commands one at a time; wait for the `%` prompt before typing the next
- The folder is `Projects` (with an s)
- The project was created in `~` by mistake and then moved here; this is safe for Yii2

## Next steps
- Create `ProductsController`
- Configure the REST routes
- Test GET requests in Postman

## Notes
