const { registerBlockType } = wp.blocks;
const { RichText, InspectorControls, ColorPalette, MediaUpload, InnerBlocks } = wp.editor;
const { PanelBody, IconButton } = wp.components;
const ALLOWED_BLOCKS = ['core/image'];

registerBlockType('psd2css/custom-block-item', {
    // built-in attributes
    title: 'Slider item',
    description: 'Block to generatre custom actions',
    icon: 'format-image',
    category: 'layout',

    // custom attributes
    attributes: {
        title: {
            type: 'string',
            source: 'html',
            selector: 'h3'
        },
        body: {
            type: 'string',
            source: 'html',
            selector: 'p'
        }
    },

    // built-in functions
    edit({attributes, setAttributes}) {
        const {
            title,
            body,
        } = attributes;
        // custom functions
        function onChangeTitle(newTitle) {
            setAttributes({ title: newTitle });
        }
        function onChangeBody(newBody) {
            setAttributes({ body: newBody });
        }

        return ([
            <div class="cta-container" style={ { border: '1px solid #808080', padding: '10px' } }>
                <RichText key="editable"
                          tagName="h3"
                          placeholder="Slider title..."
                          value={ title}
                          onChange={ onChangeTitle } />
                <RichText key="editable"
                          tagName="p"
                          placeholder="Slider description..."
                          value={ body}
                          onChange={ onChangeBody }  />
                <InnerBlocks allowedBlocks={ ALLOWED_BLOCKS } />
            </div>
        ]);
    },
    save({attributes}) {
        const {
            title,
            body,
        } = attributes;

        return (
            <div className="swiper-slide">
                <h3>{title}</h3>
                <RichText.Content tagName="p"
                                  value={body}
                                    />
                <InnerBlocks.Content />
            </div>
        );
    }
})

