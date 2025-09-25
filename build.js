import fs from 'fs';
import path from 'path';
import Twig from 'twig';

const templatesDir = path.join(process.cwd(), 'templates');
const distDir = path.join(process.cwd(), 'dist');
const imagesDir = path.join(distDir, 'images');

if (!fs.existsSync(distDir)) {
  fs.mkdirSync(distDir, { recursive: true });
}

const images = fs.readdirSync(imagesDir)
  .filter(f => /\.(jpe?g|png|gif|webp)$/i.test(f))
  .sort();


const data = {
  images
};

const templates = fs.readdirSync(templatesDir).filter(f => f.endsWith('.twig'));

templates.forEach(file => {
    const templatePath = path.join(templatesDir, file);
    const name = file.replace(/\.twig$/, '');

    let outputFile;
    if (name === 'index') {      
      outputFile = path.join(distDir, 'index.html');
    } else {      
      const outDir = path.join(distDir, name);
      fs.mkdirSync(outDir, { recursive: true });
      outputFile = path.join(outDir, 'index.html');
    }

    Twig.renderFile(templatePath, data, (err, html) => {
      if (err) {
        console.error(`Error rendering ${file}:`, err);
        return;
      }

      fs.writeFileSync(outputFile, html, 'utf-8');
      console.log(`Generated ${outputFile}`);
    });
  });