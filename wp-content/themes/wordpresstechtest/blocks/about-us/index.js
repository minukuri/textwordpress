
(function () {

const { registerBlockType } = wp.blocks;
const { TextControl, TextareaControl, Button } = wp.components;
const { MediaUpload } = wp.blockEditor;
const { createElement: el } = wp.element;

registerBlockType('wptest/about-us', {

    title: 'About Us',
    icon: 'info',
    category: 'widgets',

    attributes: {
        experience: { type: 'string' },
        section_title: { type: 'string' },
        heading: { type: 'string' },
        description: { type: 'string' },
        why_choose: { type: 'string' },
        image1: { type: 'string' },
        image2: { type: 'string' },
        image3: { type: 'string' }
    },

    edit: function(props) {

        const { attributes, setAttributes } = props;

        return el('div', {}, [

            el(TextControl,{
                label:'Experience Years',
                value:attributes.experience || '',
                onChange:(value)=>setAttributes({
                    experience:value
                })
            }),

            el(TextControl,{
                label:'Section Title',
                value:attributes.section_title || '',
                onChange:(value)=>setAttributes({
                    section_title:value
                })
            }),

            el(TextControl,{
                label:'Main Heading',
                value:attributes.heading || '',
                onChange:(value)=>setAttributes({
                    heading:value
                })
            }),

            el(TextareaControl,{
                label:'Description',
                value:attributes.description || '',
                onChange:(value)=>setAttributes({
                    description:value
                })
            }),

            el(TextareaControl,{
                label:'Why Choose Us',
                value:attributes.why_choose || '',
                onChange:(value)=>setAttributes({
                    why_choose:value
                })
            }),

            el(MediaUpload,{
                onSelect:(media)=>setAttributes({
                    image1:media.url
                }),
                allowedTypes:['image'],
                render:({open})=>el(Button,{
                    isPrimary:true,
                    onClick:open
                },'Select Image 1')
            }),

            el(MediaUpload,{
                onSelect:(media)=>setAttributes({
                    image2:media.url
                }),
                allowedTypes:['image'],
                render:({open})=>el(Button,{
                    isPrimary:true,
                    onClick:open
                },'Select Image 2')
            }),

            el(MediaUpload,{
                onSelect:(media)=>setAttributes({
                    image3:media.url
                }),
                allowedTypes:['image'],
                render:({open})=>el(Button,{
                    isPrimary:true,
                    onClick:open
                },'Select Image 3')
            })

        ]);
    },

    save:function(){
        return null;
    }


});
})();