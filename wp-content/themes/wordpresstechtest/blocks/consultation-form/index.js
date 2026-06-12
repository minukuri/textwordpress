(function () {

const { registerBlockType } = wp.blocks;
const { TextControl, TextareaControl, Button } = wp.components;
const { MediaUpload } = wp.blockEditor;
const { createElement: el } = wp.element;

registerBlockType('wptest/consultation-form', {

    title: 'Consultation Form',
    icon: 'email',
    category: 'widgets',

    attributes: {
        section_title: { type: 'string' },
        heading: { type: 'string' },
        description: { type: 'string' },
        form_id: { type: 'string' },
        image: { type: 'string' }
    },

    edit: function(props) {

        const { attributes, setAttributes } = props;

        return el('div', {}, [

            el(TextControl,{
                label:'Section Title',
                value:attributes.section_title || '',
                onChange:(value)=>setAttributes({
                    section_title:value
                })
            }),

            el(TextControl,{
                label:'Heading',
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

            el(TextControl,{
                label:'Contact Form 7 ID',
                value:attributes.form_id || '',
                onChange:(value)=>setAttributes({
                    form_id:value
                })
            }),

             el(MediaUpload, {
                onSelect: (media) => setAttributes({
                    image1: media.url
                }),
                allowedTypes: ['image'],
                render: ({ open }) =>
                    el('div', { style: { marginBottom: '20px' } }, [

                        el(Button, {
                            onClick: open,
                            isPrimary: true
                        }, 'Select Image '),

                        attributes.image1 &&
                        el('img', {
                            src: attributes.image1,
                            style: {
                                maxWidth: '150px',
                                display: 'block',
                                marginTop: '10px'
                            }
                        })
                    ])
            }),

        ]);
    },

    save:function(){
        return null;
    }

});

})();