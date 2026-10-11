# Vikrant Namdev — Azure DevOps Portfolio

A responsive, single-page PHP portfolio created from the supplied resume.

## Sections
- Professional introduction and career metrics
- Technical skills grouped by domain
- Selected enterprise cloud projects
- Professional experience
- Education, training and awards
- Contact links

## Run locally

PHP 8.0+ is recommended.

1. Install PHP, or use XAMPP on Windows.
2. Put this folder inside `htdocs` (for XAMPP), or open a terminal in this folder.
3. Run:

   ```bash
   php -S localhost:8000
   ```

4. Open `http://localhost:8000`.

With XAMPP, start Apache and open `http://localhost/vikrant-azure-devops-portfolio/`.

## Personalize before publishing
Open `index.php` and update:
- Email, phone, LinkedIn and GitHub URLs
- Project details and any public-safe metrics
- Certifications and experience dates if the resume changes

Only publish information that the portfolio owner is comfortable making public. The supplied resume's phone number and email are currently displayed.

## Publish on GitHub
1. Create a repository, for example `vikrant-azure-devops-portfolio`.
2. Upload `index.php` and `README.md` (and this project's other files).
3. Commit and push the files.

**Important:** GitHub stores and versions the source code, but GitHub Pages does not execute PHP. To get a live website URL, deploy this PHP project to a PHP-capable host (for example, a PHP shared host or a platform that supports PHP) and connect the GitHub repository if supported. Check the provider's current PHP deployment instructions before choosing a host.

## Suggested Git commands

```bash
git init
git add .
git commit -m "Add Azure DevOps portfolio"
git branch -M main
git remote add origin https://github.com/YOUR-USERNAME/vikrant-azure-devops-portfolio.git
git push -u origin main
```

## Notes
- No backend database is required.
- Contact is handled through `mailto:` links; no server-side email credentials are needed.
- The page is responsive for mobile and desktop.
