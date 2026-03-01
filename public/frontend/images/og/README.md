# Open Graph Images Directory

This directory contains Open Graph (OG) images for social media sharing. These images appear when pages from the Clinical Research Unit website are shared on Facebook, LinkedIn, Twitter, and other social platforms.

## Required Images

Create the following images at **1200x630px** (PNG or JPG format, under 1MB each):

1. **cru-default.png** - Default fallback image (used when page-specific image is not available)
2. **home-og.png** - Homepage sharing image
3. **team-og.png** - Teams listing page
4. **services-og.png** - Services listing page
5. **biobank-og.png** - Biobank service detail page
6. **genomic-og.png** - Genomic service detail page
7. **clinical-trial-og.png** - Clinical trial service detail page
8. **appointment-og.png** - Appointment page
9. **contact-og.png** - Contact page
10. **faq-og.png** - FAQ page

## Design Guidelines

### Brand Colors
- **Primary (Amber)**: `#F59E0B`
- Use CRU RSCM brand colors consistently across all images
- Consider a secondary dark color for contrast (e.g., `#1F2937` or `#374151`)

### Visual Elements
- Include the **CRU RSCM logo** prominently
- Use scientific imagery appropriate to clinical research:
  - Lab equipment (microscopes, pipettes, test tubes)
  - DNA helix graphics
  - Abstract scientific patterns
  - Research/medical imagery (professional, not stock-photo generic)
- Avoid overly clinical or medical imagery that might be off-putting

### Typography
- **Keep text minimal** - OG images are previews, not full content
- Text should be **large enough to read on mobile** (minimum 48px font size for key text)
- Use clear, professional fonts (Inter, Roboto, Open Sans, or similar)
- Maximum 2-3 lines of text per image
- High contrast between text and background

### Image Composition
- **Safe zones**: Keep important content within inner 1080x580px area (60px margin on all sides)
- Some platforms crop OG images, so avoid placing critical elements at edges
- Use consistent layout template across all images for brand cohesion
- Left or center alignment typically works best

### File Optimization
- Export as **PNG** for graphics with text and sharp edges
- Export as **JPG** (85-90% quality) for photos
- Compress images to under **1MB** (ideally 300-500KB)
- Use tools like TinyPNG, ImageOptim, or Squoosh for compression

## Example Content for Each Image

### 1. cru-default.png
- **Text**: "Clinical Research Unit RSCM"
- **Subtitle**: "Pioneering Precision Medicine in Indonesia"
- **Visual**: CRU logo + abstract DNA/genomic pattern

### 2. home-og.png
- **Text**: "Advancing Healthcare Through Genomic Research"
- **Visual**: Modern lab scene or scientific abstract with logo
- **Additional**: "National Hub for Metabolic Disease Research"

### 3. team-og.png
- **Text**: "Meet Our Expert Research Team"
- **Visual**: Professional team imagery or scientific collaboration theme
- **Additional**: "Multidisciplinary Scientists & Clinicians"

### 4. services-og.png
- **Text**: "Comprehensive Research Services"
- **Visual**: Grid of service icons (biobank, genomic, clinical trial symbols)
- **Additional**: "Biobank | Genomics | Clinical Trials"

### 5. biobank-og.png
- **Text**: "Professional Biobank Services"
- **Visual**: Freezer units, sample tubes, or storage imagery
- **Additional**: "2,000+ Subjects | 40,000+ Samples"

### 6. genomic-og.png
- **Text**: "Advanced Genomic Sequencing"
- **Visual**: DNA sequencing imagery, helix graphics
- **Additional**: "Precision Medicine Through Genomics"

### 7. clinical-trial-og.png
- **Text**: "Clinical Trial Management"
- **Visual**: Research documentation, regulatory compliance imagery
- **Additional**: "Ethical Research Excellence"

### 8. appointment-og.png
- **Text**: "Schedule Your Consultation"
- **Visual**: Calendar/appointment imagery with professional tone
- **Additional**: "Genetic Counseling & Precision Medicine"

### 9. contact-og.png
- **Text**: "Connect With CRU RSCM"
- **Visual**: Location/contact theme with Indonesia map or RSCM building
- **Additional**: "Research Collaboration Opportunities"

### 10. faq-og.png
- **Text**: "Your Questions Answered"
- **Visual**: FAQ iconography with professional research theme
- **Additional**: "Common Questions About Our Services"

## Design Tools

### Recommended Tools:
- **Canva** (easiest, templates available) - https://canva.com
- **Figma** (professional, free for individuals) - https://figma.com
- **Adobe Photoshop** (professional, requires subscription)
- **GIMP** (free alternative to Photoshop) - https://gimp.org
- **Pixlr** (free online editor) - https://pixlr.com

### Template Resources:
- Search for "Open Graph template 1200x630" in Canva
- Use Figma Community OG image templates
- Create a master template and duplicate it for consistency

## Testing After Creation

After creating and uploading the images, test them using:

1. **Facebook Sharing Debugger**: https://developers.facebook.com/tools/debug/
   - Enter each page URL
   - Click "Scrape Again" to clear cache if updating images
   - Verify image displays correctly

2. **Twitter Card Validator**: https://cards-dev.twitter.com/validator
   - Test each page URL
   - Check image preview and dimensions

3. **LinkedIn Post Inspector**: https://www.linkedin.com/post-inspector/
   - Verify professional appearance on LinkedIn

4. **Generic OG Checker**: https://www.opengraph.xyz/
   - Quick check for all meta tags and image

## Temporary Solution (Until Proper Images are Created)

If you need a quick temporary solution:
1. Use the default fallback image `cru-default.png` for all pages initially
2. You can copy existing images from `/public/frontend/images/` that match the page theme
3. Or create a simple branded image with just the logo and page title

## File Naming Convention

- Use lowercase, hyphenated names
- Match the filenames exactly as listed above
- Examples: `biobank-og.png`, `team-og.png`, NOT `Biobank_OG.PNG`

## Questions?

If you need design assistance or have questions about OG image creation, consult with your design team or use the Canva templates for a quick professional result.
