# Deploy to DreamHost

```bash
# SSH into server
ssh paul.madisonh3.com

# Go to site root
cd ~/paul.madisonh3.com

# Pull latest code into the _repo directory
cd _repo
git pull origin master

# Go back to site root
cd ..

# Copy updated files from _repo into live directories
cp -av _repo/public/. public/
cp -av _repo/posts/. posts/
cp -av _repo/template/. template/

# Done — refresh the website in browser