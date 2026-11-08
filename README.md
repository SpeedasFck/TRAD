# Birthday website

## Run locally with Laravel

```powershell
php artisan serve
```

Open `http://127.0.0.1:8000`.

## Publish a shareable GitHub Pages link

GitHub Pages hosts the static birthday page; it does not run Laravel or PHP.
The workflow in `.github/workflows/deploy-pages.yml` publishes the page whenever
you push to `main` or `master`.

1. Create a **public** repository on GitHub. Do not initialize it with a README.
2. In this project folder, run the following commands, replacing the remote URL
   with your repository's URL:

   ```powershell
   git init
   git add .
   git commit -m "Add birthday website"
   git branch -M main
   git remote add origin https://github.com/YOUR-USERNAME/YOUR-REPOSITORY.git
   git push -u origin main
   ```

3. In the repository, open **Settings → Pages** and set the build and
   deployment source to **GitHub Actions**.
4. Open the **Actions** tab and wait for **Deploy birthday page to GitHub Pages**
   to finish successfully.
5. Share `https://YOUR-USERNAME.github.io/YOUR-REPOSITORY/`.

The Laravel `.env` file is excluded by `.gitignore`; never add it to GitHub.
