💻 Local Development Workflow
1. Make Changes

Edit:

Posts in /posts/

Images in /public/images/

Templates in /template/

2. Test Locally

Start PHP dev server:

php -S localhost:8000 -t public

Then visit:

http://localhost:8000/post.php?slug=your-post-slug

Confirm:

Images load

No 404s

No PHP errors

3. Commit & Push
   git add .
   git commit -m "Describe your change"
   git push origin master
   🚀 Production Deployment (DreamHost)
   Step 1 — SSH Into Server
   ssh your-username@your-server
   cd ~/paul.madisonh3.com
   Step 2 — Pull Latest Code
   cd _repo
   git pull origin master

This updates the repository clone only.

Step 3 — Copy Files To Live Web Root

⚠️ This step is required because the site does NOT run directly from _repo.

cd ..
cp -av _repo/public/. public/
cp -av _repo/posts/. posts/
cp -av _repo/template/. template/
Why /. matters

Using /. copies the contents of the folder instead of nesting the folder itself.

Step 4 — Verify Deployment

Visit:

https://paul.madisonh3.com

Test:

New post loads

Images appear

No 500 errors

📷 Adding Images

Place images locally in:

public/images/

In posts, reference them like:

<img src="/images/filename.png" alt="Description" />

Do NOT use:

/public/images/filename.png

The web root is already /public.

📝 Post Format

Each post file in /posts/ must define:

<?php
$post = [
  'title' => 'Post Title',
  'date'  => 'Month Year',
  'html'  => '
    <p>Your content here</p>
  '
];

Do NOT edit:

post.php

layout.php

Posts are data only.

🔁 Full Deployment Summary

Every time you deploy:

ssh into server
cd ~/paul.madisonh3.com/_repo
git pull origin master
cd ..
cp -av _repo/public/. public/
cp -av _repo/posts/. posts/
cp -av _repo/template/. template/

Refresh browser.

Done.

⚠️ Common Issues
Images 404?

Confirm images exist in public/images/

Confirm <img src="/images/filename.png">

Confirm copy step completed

Blank Page?

Check PHP error log

Confirm no missing quote in $post['html']

Confirm post slug matches filename

Post Not Found?

Slug must match filename exactly

Only lowercase letters, numbers, and hyphens allowed

🛠 Future Improvement (Optional)

To eliminate the copy step entirely, the site could be configured to serve directly from _repo/public.

That would reduce deployment to:

git pull origin master

Current workflow is stable and predictable.