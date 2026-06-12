(function () {
const { registerBlockType } = wp.blocks;
const { TextControl, Button } = wp.components;
const { MediaUpload } = wp.blockEditor;
const { createElement: el } = wp.element;

registerBlockType('wptest/hero-slider', {

    title: 'Hero Slider',
    icon: 'slides',
    category: 'widgets',

    attributes: {
        heading: { type: 'string' },
        subheading: { type: 'string' },
        award: { type: 'string' },
        wptests: { type: 'string' },
        reviews: { type: 'string' },
        image1: { type: 'string' },
        image2: { type: 'string' },
        image3: { type: 'string' }
    },

    edit: function(props) {

        const { attributes, setAttributes } = props;

        return el('div', {}, [

            el(TextControl, {
                label: 'Heading',
                value: attributes.heading || '',
                onChange: (value) => setAttributes({
                    heading: value
                })
            }),

            el(TextControl, {
                label: 'Sub Heading',
                value: attributes.subheading || '',
                onChange: (value) => setAttributes({
                    subheading: value
                })
            }),

            el(TextControl, {
                label: 'Award Count',
                value: attributes.award || '',
                onChange: (value) => setAttributes({
                    award: value
                })
            }),

            el(TextControl, {
                label: 'wptests Count',
                value: attributes.wptests || '',
                onChange: (value) => setAttributes({
                    wptests: value
                })
            }),

            el(TextControl, {
                label: 'Reviews Count',
                value: attributes.reviews || '',
                onChange: (value) => setAttributes({
                    reviews: value
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
                        }, 'Select Slider Image 1'),

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

            el(MediaUpload, {
                onSelect: (media) => setAttributes({
                    image2: media.url
                }),
                allowedTypes: ['image'],
                render: ({ open }) =>
                    el('div', { style: { marginBottom: '20px' } }, [

                        el(Button, {
                            onClick: open,
                            isPrimary: true
                        }, 'Select Slider Image 2'),

                        attributes.image2 &&
                        el('img', {
                            src: attributes.image2,
                            style: {
                                maxWidth: '150px',
                                display: 'block',
                                marginTop: '10px'
                            }
                        })
                    ])
            }),
            el(MediaUpload, {
                onSelect: (media) => setAttributes({
                    image3: media.url
                }),
                allowedTypes: ['image'],
                render: ({ open }) =>
                    el('div', { style: { marginBottom: '20px' } }, [

                        el(Button, {
                            onClick: open,
                            isPrimary: true
                        }, 'Select Slider Image 3'),

                        attributes.image3 &&
                        el('img', {
                            src: attributes.image3,
                            style: {
                                maxWidth: '150px',
                                display: 'block',
                                marginTop: '10px'
                            }
                        })
                    ])
            })

        ]);
    },

    save: function() {
        return null;
    }

});
})();