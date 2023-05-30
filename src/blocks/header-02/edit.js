import { RichText } from "@wordpress/block-editor";

export default function edit({attributes, setAttributes}) {
    const { content } = attributes;
    
    return (
        <div>
            <RichText
            tagName="h2"
            placeholder={" Enter heading"}
            value={content}
            onChange={(newVal) => setAttributes({ content: newVal })}
            />
            </div>
    )
}

 